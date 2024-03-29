<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;

/**
 * Reservations Controller
 *
 * @property \App\Model\Table\ReservationsTable $Reservations
 *
 * @method \App\Model\Entity\Reservation[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ReservationsController extends AppController
{
    public function initialize(){
        parent::initialize();
        $this->Schedules = TableRegistry::get('schedules');
        $this->Users = TableRegistry::get('users');
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->set('entity',$this->Reservations->newEntity());
        if($this->request->is('post')){
            $schedule = $this->Schedules->findByDateTime($this->request->data['date'])->first();
            $query = $this->Reservations->findByScheduleId($schedule['id']);
        }
        else{
            $query = $this->Reservations->find('all');
        }
        $this->paginate = [
            'contain' => ['Schedules', 'Customers', 'Staffs']
        ];
        $reservations = $this->paginate($query);

        $this->set(compact('reservations'));
    }

    /**
     * View method
     *
     * @param string|null $id Reservation id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $reservation = $this->Reservations->get($id, [
            'contain' => ['Schedules', 'Customers', 'Staffs']
        ]);

        $this->set('reservation', $reservation);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $reservation = $this->Reservations->newEntity();
        if ($this->request->is('post')) {
            $reservation = $this->Reservations->patchEntity($reservation, $this->request->getData());
            if ($this->Reservations->save($reservation)) {
                $this->Flash->success(__('The reservation has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The reservation could not be saved. Please, try again.'));
        }
        $schedules = $this->Reservations->Schedules->find('list', ['limit' => 200]);
        $customers = $this->Reservations->Customers->find('list', ['limit' => 200]);
        $staffs = $this->Reservations->Staffs->find('list', ['limit' => 200]);
        $this->set(compact('reservation', 'schedules', 'customers', 'staffs'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Reservation id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $reservation = $this->Reservations->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $reservation = $this->Reservations->patchEntity($reservation, $this->request->getData());
            if ($this->Reservations->save($reservation)) {
                $this->Flash->success(__('The reservation has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The reservation could not be saved. Please, try again.'));
        }
        $schedules = $this->Reservations->Schedules->find('list', ['limit' => 200]);
        $customers = $this->Reservations->Customers->find('list', ['limit' => 200]);
        $staffs = $this->Reservations->Staffs->find('list', ['limit' => 200]);
        $this->set(compact('reservation', 'schedules', 'customers', 'staffs'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Reservation id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $reservation = $this->Reservations->get($id);
        if ($this->Reservations->delete($reservation)) {
            $this->Flash->success(__('The reservation has been deleted.'));
        } else {
            $this->Flash->error(__('The reservation could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
