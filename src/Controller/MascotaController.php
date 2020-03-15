<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Mascota Controller
 *
 * @property \App\Model\Table\MascotaTable $Mascota
 *
 * @method \App\Model\Entity\Mascotum[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class MascotaController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Persona', 'Especie']
        ];
        $mascota = $this->paginate($this->Mascota);

        $this->set(compact('mascota'));
    }

    /**
     * View method
     *
     * @param string|null $id Mascotum id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $mascotum = $this->Mascota->get($id, [
            'contain' => ['Persona', 'Especie']
        ]);

        $this->set('mascotum', $mascotum);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $mascotum = $this->Mascota->newEntity();
        if ($this->request->is('post')) {
            $mascotum = $this->Mascota->patchEntity($mascotum, $this->request->getData());
            if ($this->Mascota->save($mascotum)) {
                $this->Flash->success(__('The mascotum has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The mascotum could not be saved. Please, try again.'));
        }
        $persona = $this->Mascota->Persona->find('list', ['limit' => 200]);
        $especie = $this->Mascota->Especie->find('list', ['limit' => 200]);
        $this->set(compact('mascotum', 'persona', 'especie'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Mascotum id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $mascotum = $this->Mascota->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $mascotum = $this->Mascota->patchEntity($mascotum, $this->request->getData());
            if ($this->Mascota->save($mascotum)) {
                $this->Flash->success(__('The mascotum has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The mascotum could not be saved. Please, try again.'));
        }
        $persona = $this->Mascota->Persona->find('list', ['limit' => 200]);
        $especie = $this->Mascota->Especie->find('list', ['limit' => 200]);
        $this->set(compact('mascotum', 'persona', 'especie'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Mascotum id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $mascotum = $this->Mascota->get($id);
        if ($this->Mascota->delete($mascotum)) {
            $this->Flash->success(__('The mascotum has been deleted.'));
        } else {
            $this->Flash->error(__('The mascotum could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
