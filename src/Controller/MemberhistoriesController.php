<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Memberhistories Controller
 *
 * @property \App\Model\Table\MemberhistoriesTable $Memberhistories
 *
 * @method \App\Model\Entity\Memberhistory[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class MemberhistoriesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Members', 'Schedules']
        ];
        $memberhistories = $this->paginate($this->Memberhistories);

        $this->set(compact('memberhistories'));
    }

    /**
     * View method
     *
     * @param string|null $id Memberhistory id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $memberhistory = $this->Memberhistories->get($id, [
            'contain' => ['Members', 'Schedules']
        ]);

        $this->set('memberhistory', $memberhistory);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $memberhistory = $this->Memberhistories->newEntity();
        if ($this->request->is('post')) {
            $memberhistory = $this->Memberhistories->patchEntity($memberhistory, $this->request->getData());
            if ($this->Memberhistories->save($memberhistory)) {
                $this->Flash->success(__('The memberhistory has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The memberhistory could not be saved. Please, try again.'));
        }
        $members = $this->Memberhistories->Members->find('list', ['limit' => 200]);
        $schedules = $this->Memberhistories->Schedules->find('list', ['limit' => 200]);
        $this->set(compact('memberhistory', 'members', 'schedules'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Memberhistory id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $memberhistory = $this->Memberhistories->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $memberhistory = $this->Memberhistories->patchEntity($memberhistory, $this->request->getData());
            if ($this->Memberhistories->save($memberhistory)) {
                $this->Flash->success(__('The memberhistory has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The memberhistory could not be saved. Please, try again.'));
        }
        $members = $this->Memberhistories->Members->find('list', ['limit' => 200]);
        $schedules = $this->Memberhistories->Schedules->find('list', ['limit' => 200]);
        $this->set(compact('memberhistory', 'members', 'schedules'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Memberhistory id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $memberhistory = $this->Memberhistories->get($id);
        if ($this->Memberhistories->delete($memberhistory)) {
            $this->Flash->success(__('The memberhistory has been deleted.'));
        } else {
            $this->Flash->error(__('The memberhistory could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
