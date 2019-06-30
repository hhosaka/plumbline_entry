<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Licensesets Controller
 *
 * @property \App\Model\Table\LicensesetsTable $Licensesets
 *
 * @method \App\Model\Entity\Licenseset[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class LicensesetsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Staffs', 'Licenses']
        ];
        $licensesets = $this->paginate($this->Licensesets);

        $this->set(compact('licensesets'));
    }

    /**
     * View method
     *
     * @param string|null $id Licenseset id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $licenseset = $this->Licensesets->get($id, [
            'contain' => ['Staffs', 'Licenses']
        ]);

        $this->set('licenseset', $licenseset);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $licenseset = $this->Licensesets->newEntity();
        if ($this->request->is('post')) {
            $licenseset = $this->Licensesets->patchEntity($licenseset, $this->request->getData());
            if ($this->Licensesets->save($licenseset)) {
                $this->Flash->success(__('The licenseset has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The licenseset could not be saved. Please, try again.'));
        }
        $staffs = $this->Licensesets->Staffs->find('list', ['limit' => 200]);
        $licenses = $this->Licensesets->Licenses->find('list', ['limit' => 200]);
        $this->set(compact('licenseset', 'staffs', 'licenses'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Licenseset id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $licenseset = $this->Licensesets->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $licenseset = $this->Licensesets->patchEntity($licenseset, $this->request->getData());
            if ($this->Licensesets->save($licenseset)) {
                $this->Flash->success(__('The licenseset has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The licenseset could not be saved. Please, try again.'));
        }
        $staffs = $this->Licensesets->Staffs->find('list', ['limit' => 200]);
        $licenses = $this->Licensesets->Licenses->find('list', ['limit' => 200]);
        $this->set(compact('licenseset', 'staffs', 'licenses'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Licenseset id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $licenseset = $this->Licensesets->get($id);
        if ($this->Licensesets->delete($licenseset)) {
            $this->Flash->success(__('The licenseset has been deleted.'));
        } else {
            $this->Flash->error(__('The licenseset could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
