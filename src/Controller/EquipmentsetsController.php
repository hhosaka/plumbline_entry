<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Equipmentsets Controller
 *
 * @property \App\Model\Table\EquipmentsetsTable $Equipmentsets
 *
 * @method \App\Model\Entity\Equipmentset[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class EquipmentsetsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Courses', 'Equipment']
        ];
        $equipmentsets = $this->paginate($this->Equipmentsets);

        $this->set(compact('equipmentsets'));
    }

    /**
     * View method
     *
     * @param string|null $id Equipmentset id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $equipmentset = $this->Equipmentsets->get($id, [
            'contain' => ['Courses', 'Equipment']
        ]);

        $this->set('equipmentset', $equipmentset);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $equipmentset = $this->Equipmentsets->newEntity();
        if ($this->request->is('post')) {
            $equipmentset = $this->Equipmentsets->patchEntity($equipmentset, $this->request->getData());
            if ($this->Equipmentsets->save($equipmentset)) {
                $this->Flash->success(__('The equipmentset has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The equipmentset could not be saved. Please, try again.'));
        }
        $courses = $this->Equipmentsets->Courses->find('list', ['limit' => 200]);
        $equipment = $this->Equipmentsets->Equipment->find('list', ['limit' => 200]);
        $this->set(compact('equipmentset', 'courses', 'equipment'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Equipmentset id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $equipmentset = $this->Equipmentsets->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $equipmentset = $this->Equipmentsets->patchEntity($equipmentset, $this->request->getData());
            if ($this->Equipmentsets->save($equipmentset)) {
                $this->Flash->success(__('The equipmentset has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The equipmentset could not be saved. Please, try again.'));
        }
        $courses = $this->Equipmentsets->Courses->find('list', ['limit' => 200]);
        $equipment = $this->Equipmentsets->Equipment->find('list', ['limit' => 200]);
        $this->set(compact('equipmentset', 'courses', 'equipment'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Equipmentset id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $equipmentset = $this->Equipmentsets->get($id);
        if ($this->Equipmentsets->delete($equipmentset)) {
            $this->Flash->success(__('The equipmentset has been deleted.'));
        } else {
            $this->Flash->error(__('The equipmentset could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
