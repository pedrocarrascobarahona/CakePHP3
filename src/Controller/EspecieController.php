<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Especie Controller
 *
 * @property \App\Model\Table\EspecieTable $Especie
 *
 * @method \App\Model\Entity\Especie[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class EspecieController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $especie = $this->paginate($this->Especie);

        $this->set(compact('especie'));
    }

    /**
     * View method
     *
     * @param string|null $id Especie id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $especie = $this->Especie->get($id, [
            'contain' => []
        ]);

        $this->set('especie', $especie);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $especie = $this->Especie->newEntity();
        if ($this->request->is('post')) {
            $especie = $this->Especie->patchEntity($especie, $this->request->getData());
            if ($this->Especie->save($especie)) {
                $this->Flash->success(__('The especie has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The especie could not be saved. Please, try again.'));
        }
        $this->set(compact('especie'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Especie id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $especie = $this->Especie->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $especie = $this->Especie->patchEntity($especie, $this->request->getData());
            if ($this->Especie->save($especie)) {
                $this->Flash->success(__('The especie has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The especie could not be saved. Please, try again.'));
        }
        $this->set(compact('especie'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Especie id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $especie = $this->Especie->get($id);
        if ($this->Especie->delete($especie)) {
            $this->Flash->success(__('The especie has been deleted.'));
        } else {
            $this->Flash->error(__('The especie could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
