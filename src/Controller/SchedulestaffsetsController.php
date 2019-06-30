<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Schedulestaffsets Controller
 *
 * @property \App\Model\Table\SchedulestaffsetsTable $Schedulestaffsets
 *
 * @method \App\Model\Entity\Schedulestaffset[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SchedulestaffsetsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Schedules', 'Staffs']
        ];
        $schedulestaffsets = $this->paginate($this->Schedulestaffsets);

        $this->set(compact('schedulestaffsets'));
    }

    /**
     * View method
     *
     * @param string|null $id Schedulestaffset id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $schedulestaffset = $this->Schedulestaffsets->get($id, [
            'contain' => ['Schedules', 'Staffs']
        ]);

        $this->set('schedulestaffset', $schedulestaffset);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $schedulestaffset = $this->Schedulestaffsets->newEntity();
        if ($this->request->is('post')) {
            $schedulestaffset = $this->Schedulestaffsets->patchEntity($schedulestaffset, $this->request->getData());
            if ($this->Schedulestaffsets->save($schedulestaffset)) {
                $this->Flash->success(__('The schedulestaffset has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The schedulestaffset could not be saved. Please, try again.'));
        }
        $schedules = $this->Schedulestaffsets->Schedules->find('list', ['limit' => 200]);
        $staffs = $this->Schedulestaffsets->Staffs->find('list', ['limit' => 200]);
        $this->set(compact('schedulestaffset', 'schedules', 'staffs'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Schedulestaffset id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $schedulestaffset = $this->Schedulestaffsets->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $schedulestaffset = $this->Schedulestaffsets->patchEntity($schedulestaffset, $this->request->getData());
            if ($this->Schedulestaffsets->save($schedulestaffset)) {
                $this->Flash->success(__('The schedulestaffset has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The schedulestaffset could not be saved. Please, try again.'));
        }
        $schedules = $this->Schedulestaffsets->Schedules->find('list', ['limit' => 200]);
        $staffs = $this->Schedulestaffsets->Staffs->find('list', ['limit' => 200]);
        $this->set(compact('schedulestaffset', 'schedules', 'staffs'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Schedulestaffset id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $schedulestaffset = $this->Schedulestaffsets->get($id);
        if ($this->Schedulestaffsets->delete($schedulestaffset)) {
            $this->Flash->success(__('The schedulestaffset has been deleted.'));
        } else {
            $this->Flash->error(__('The schedulestaffset could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
