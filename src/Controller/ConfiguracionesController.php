<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Configuraciones Controller
 *
 * @property \App\Model\Table\ConfiguracionesTable $Configuraciones
 *
 * @method \App\Model\Entity\Configuracion[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ConfiguracionesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $configuraciones = $this->paginate($this->Configuraciones);

        $this->set(compact('configuraciones'));
    }

    /**
     * View method
     *
     * @param string|null $id Configuracion id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $configuracion = $this->Configuraciones->get($id, [
            'contain' => []
        ]);

        $this->set('configuracion', $configuracion);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $configuracion = $this->Configuraciones->newEntity();
        if ($this->request->is('post')) {
            $configuracion = $this->Configuraciones->patchEntity($configuracion, $this->request->getData());
            if ($this->Configuraciones->save($configuracion)) {
                $this->Flash->success(__('The configuracion has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The configuracion could not be saved. Please, try again.'));
        }
        $this->set(compact('configuracion'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Configuracion id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $configuracion = $this->Configuraciones->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $configuracion = $this->Configuraciones->patchEntity($configuracion, $this->request->getData());
            if ($this->Configuraciones->save($configuracion)) {
                $this->Flash->success(__('The configuracion has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The configuracion could not be saved. Please, try again.'));
        }
        $this->set(compact('configuracion'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Configuracion id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $configuracion = $this->Configuraciones->get($id);
        if ($this->Configuraciones->delete($configuracion)) {
            $this->Flash->success(__('The configuracion has been deleted.'));
        } else {
            $this->Flash->error(__('The configuracion could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
