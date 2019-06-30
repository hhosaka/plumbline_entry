<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Coursestaffsets Controller
 *
 * @property \App\Model\Table\CoursestaffsetsTable $Coursestaffsets
 *
 * @method \App\Model\Entity\Coursestaffset[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CoursestaffsetsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Courses', 'Staffs']
        ];
        $coursestaffsets = $this->paginate($this->Coursestaffsets);

        $this->set(compact('coursestaffsets'));
    }

    /**
     * View method
     *
     * @param string|null $id Coursestaffset id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $coursestaffset = $this->Coursestaffsets->get($id, [
            'contain' => ['Courses', 'Staffs']
        ]);

        $this->set('coursestaffset', $coursestaffset);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $coursestaffset = $this->Coursestaffsets->newEntity();
        if ($this->request->is('post')) {
            $coursestaffset = $this->Coursestaffsets->patchEntity($coursestaffset, $this->request->getData());
            if ($this->Coursestaffsets->save($coursestaffset)) {
                $this->Flash->success(__('The coursestaffset has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The coursestaffset could not be saved. Please, try again.'));
        }
        $courses = $this->Coursestaffsets->Courses->find('list', ['limit' => 200]);
        $staffs = $this->Coursestaffsets->Staffs->find('list', ['limit' => 200]);
        $this->set(compact('coursestaffset', 'courses', 'staffs'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Coursestaffset id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $coursestaffset = $this->Coursestaffsets->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $coursestaffset = $this->Coursestaffsets->patchEntity($coursestaffset, $this->request->getData());
            if ($this->Coursestaffsets->save($coursestaffset)) {
                $this->Flash->success(__('The coursestaffset has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The coursestaffset could not be saved. Please, try again.'));
        }
        $courses = $this->Coursestaffsets->Courses->find('list', ['limit' => 200]);
        $staffs = $this->Coursestaffsets->Staffs->find('list', ['limit' => 200]);
        $this->set(compact('coursestaffset', 'courses', 'staffs'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Coursestaffset id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $coursestaffset = $this->Coursestaffsets->get($id);
        if ($this->Coursestaffsets->delete($coursestaffset)) {
            $this->Flash->success(__('The coursestaffset has been deleted.'));
        } else {
            $this->Flash->error(__('The coursestaffset could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
