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
        //$this->set('msg','Entry/index');
        $this->Users = TableRegistry::get('users');
        $this->Schedules = TableRegistry::get('schedules');
        $this->Reservations = TableRegistry::get('reservations');
        $this->Auth->allow(['index']);
    }

    private function mail($to, $user, $schedule, $template_filename){
        $json = json_decode(file_get_contents(TEMPLATE_FOLDER_MAIL . $template_filename));
        $email = new Email('default');
        $email->setFrom([SYSTEM_MAIL_ADDRESS => SYSTEM_MAIL_NAME])
            ->setTo($to)
            ->setSubject($json->{'subject'})
            ->send($this->convert($json->{'body'},$user, $schedule));
    }

    private function convert($body,$user,$schedule){
        $body = str_replace('%name%',$user['family_name'].' '.$user['first_name'],$body);
        $body = str_replace('%email%',$user['email1'],$body);
        $body = str_replace('%phone%',$user['phone1'],$body);
        $body = str_replace('%subject%',$schedule['subject'],$body);
        $body = str_replace('%email%',$schedule['email1'],$body);
        return str_replace('%date_time%',$schedule['date_time'],$body);
    }

    private function entry($user, $schedule){
    
        $reservation = $this->Reservations->newEntity($this->request->getData());
        $reservation['schedule_id'] = $schedule['id'];
        $reservation['customer_id'] = $user['id'];
        $reservation['staff_id'] = 1;//TODO : tentative
        $reservation['receiving_method'] = "byWeb";
        $reservation['charge_method'] = "Undefined";
        if($this->Reservations->save($reservation)){
            if(SEND_MAIL){
                $this->mail(OWNER_MAIL_ADDRESS, $user, $schedule, 'confirmation_system_new_entry.json');
                $this->mail($user['email1'], $user, $schedule, 'confirmation_customer_new_entry.json');
            }
            return true;
        }
        return false;
    }

    public function index(){
        $date = $this->request->getQuery('date');
        $start_time = $this->request->getQuery('start_time');
        //$email = $this->request->getQuery('email');// TODO : a plan
        $user = $this->Auth->user();
        $schedule = $this->Schedules->findByDateTime($date.' '.$start_time)->first();
        $instructor = $this->Users->findById($schedule['instructor_id'])->first()['username'];
        if($schedule == null){
            $this->Flash->error(__('予約情報が異常です。管理者に問い合わせてください。'));
            $this->redirect(['action'=>'error']);
        }
        else{
            if(!$this->entry($user, $schedule)){
                $this->Flash->error(__('予約の登録時に異常が発生しました。管理者に問い合わせてください。'));
                $this->redirect(['action'=>'error']);
            }
        }
        $this->set(compact('user','schedule','instructor'));
    }

    public function error(){
    }
}

?>
