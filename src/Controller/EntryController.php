<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;
use Cake\Mailer\Email;

class EntryController extends AppController {

    public $name = 'Entry';
    public $uses = null;
    public $autoRender = true;

    public function initialize(){
        $this->set('msg','Entry/index');
        $this->Members = TableRegistry::get('members');
        $this->Schedules = TableRegistry::get('schedules');
        $this->Reservations = TableRegistry::get('reservations');
        $validator = $this->Members->getValidator('default');
        $validator->add('confirm1', 'no-misspelling', [
            'rule' => ['compareWith', 'email1'],
            'message' => '確認用のメールアドレスが一致しません',
        ]);
        $validator->add('confirm2', 'no-misspelling', [
            'rule' => ['compareWith', 'password'],
            'message' => '確認用のパスワードが一致しません',
        ]);
        $this->set('information',"必要な項目を入力してください。");
    }

    function mail($to, $member, $body_filename){
        $json = json_decode(file_get_contents(TEMPLATE_FOLDER_MAIL . $body_filename));
        $email = new Email('default');
        $email->setFrom([MAIL_ADDRESS_SYSTEM => MAIL_NAME_SYSTEM])
            ->setTo($to)
            ->setSubject($json->{'subject'})
            ->send($json->{'body'});
    }

    function convert($body,$member,$schedule){
        $body = str_replace('%name%',$member['family_name'].' '.$member['first_name'],$body);
        $body = str_replace('%lesson%',$schedule['subject'],$body);
        return str_replace('%date_time%',$schedule['date_time'],$body);
    }

    public function index(){
        $member = $this->Members->newEntity();
    
        if ($this->request->is('post')) {
            $this->set('information',"<font color = 'red'>入力が正しくない箇所があります。訂正してやり直してください。</font>");
            $member = $this->Members->patchEntity($member, $this->request->getData());
            if ($this->Members->save($member)) {
                $date = $this->request->query["date"];
                $start_time = $this->request->query["start_time"];
                $schedule = $this->Schedules->findByDateTime($date.' '.$start_time)->first();
                if($schedule==null){
                    return $this->redirect(['action' => 'error', '?'=>['errorCode'=>'0001']]);
                }
                else{
                    $reservation = $this->Reservations->newEntity($this->request->getData());
                    $reservation['schedule_id'] = $schedule['id'];
                    $reservation['member_id'] = $member['id'];
                    $reservation['receiving_method'] = "byWeb";
                    $reservation['charge_method'] = "Undefined";
                    if($this->Reservations->saveOrFail($reservation))
                    {
                        if(!SEND_MAIL){
                            $this->mail(SYSTEM_MAIL, $member, 'confirmation_system_new_entry_body.json');
                            $this->mail($member['email'], $member, 'confirmation_customer_new_entry_body.json');
                        }
                        return $this->redirect(['action' => 'done', '?'=>['sentMail'=>$member['email1']]]);
                    }
                }
            }
        }
        $this->set(compact('member'));
    }

    public function done(){
        $this->set('sentMail', $this->request->query['sentMail']);
    }

    public function error(){
        $this->set('errorCode', $this->request->query['errorCode']);
    }
}

?>
