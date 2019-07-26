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
        parent::initialize();
        $this->set('msg','Entry/index');
        $this->Users = TableRegistry::get('users');
        $this->Schedules = TableRegistry::get('schedules');
        $this->Reservations = TableRegistry::get('reservations');
        $validator = $this->Users->getValidator('default');
        $validator->add('confirm1', 'no-misspelling', [
            'rule' => ['compareWith', 'email1'],
            'message' => '確認用のメールアドレスが一致しません',
        ]);
        $this->set('information',"必要な項目を入力してください。");
        $this->Auth->allow(['home','index','done','error']);
    }

    function mail($to, $user, $schedule, $template_filename){
        $json = json_decode(file_get_contents(TEMPLATE_FOLDER_MAIL . $template_filename));
        $email = new Email('default');
        $email->setFrom([SYSTEM_MAIL_ADDRESS => SYSTEM_MAIL_NAME])
            ->setTo($to)
            ->setSubject($json->{'subject'})
            ->send($this->convert($json->{'body'},$user, $schedule));
    }

    function convert($body,$user,$schedule){
        $body = str_replace('%name%',$user['family_name'].' '.$user['first_name'],$body);
        $body = str_replace('%email%',$user['email1'],$body);
        $body = str_replace('%phone%',$user['phone1'],$body);
        $body = str_replace('%subject%',$schedule['subject'],$body);
        $body = str_replace('%email%',$schedule['email1'],$body);
        return str_replace('%date_time%',$schedule['date_time'],$body);
    }

    public function guest(){
        $schedule = $this->beforeEntry();
        $user = $this->Users->newEntity();

        if ($this->request->is('post')) {
            $this->set('information',"<font color = 'red'>入力が正しくない箇所があります。訂正してやり直してください。</font>");
            $user = $this->Users->patchEntity($user, $this->request->getData());
            $user['username'] = $user['email1'];
            $user['password'] = $user['email1'];
            $user['role'] = 'customer';
            if ($this->Users->save($user)) {
                $this->entry($user, $schedule);
            }
        }
        $this->set(compact('user'));
    }

    private function beforeEntry()
    {
        $email = $this->request->getQuery('email');
        $subject = $this->request->getQuery('subject');
        $date = $this->request->getQuery('date');
        $start_time = $this->request->getQuery('start_time');
        $schedule = $this->Schedules->findByDateTime($date.' '.$start_time)->first();
        if($schedule == null){
            return $this->redirect(['action' => 'error', '?'=>['errorCode'=>'0001']]);
        }
        $this->set('date',$date);
        $this->set('start_time',$start_time);
        $this->set('email',$email);
        $this->set('subject',$subject);
        return $schedule;
    }

    private function entry($user, $schedule){
    
        $reservation = $this->Reservations->newEntity($this->request->getData());
        $reservation['schedule_id'] = $schedule['id'];
        $reservation['customer_id'] = $user['id'];
        $reservation['staff_id'] = 1;
        $reservation['receiving_method'] = "byWeb";
        $reservation['charge_method'] = "Undefined";
        if($this->Reservations->save($reservation)){
            if(SEND_MAIL){
                $this->mail(OWNER_MAIL_ADDRESS, $user, $schedule, 'confirmation_system_new_entry.json');
                $this->mail($user['email1'], $user, $schedule, 'confirmation_customer_new_entry.json');
            }
            return $this->redirect(['action' => 'done', '?'=>['sentMail'=>$user['email1']]]);
        }
    }

    public function reserve(){
        $user = $this->Auth->getUser();
        $this->entry($user, $this->beforeEntry());
        $this->set(compact('user'));
    }

    public function done(){
        $this->set('sentMail', $this->request->getQuery('sentMail'));
    }

    public function error(){
        $this->set('errorCode', $this->request->getQuery('errorCode'));
    }

    public function index(){

    }
}

?>
