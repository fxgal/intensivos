<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Ofertas Controller
 *
 * @property \App\Model\Table\OfertasTable $Ofertas
 *
 * @method \App\Model\Entity\Oferta[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class OfertasController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Materias', 'Periodos']
        ];
        $ofertas = $this->paginate($this->Ofertas);

        $this->set(compact('ofertas'));
    }

    /**
     * View method
     *
     * @param string|null $id Oferta id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $oferta = $this->Ofertas->get($id, [
            'contain' => ['Materias', 'Periodos']
        ]);

        $this->set('oferta', $oferta);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $oferta = $this->Ofertas->newEntity();
        if ($this->request->is('post')) {
            $oferta = $this->Ofertas->patchEntity($oferta, $this->request->getData());
            if ($this->Ofertas->save($oferta)) {
                $this->Flash->success(__('The oferta has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The oferta could not be saved. Please, try again.'));
        }
        $materias = $this->Ofertas->Materias->find('list', ['limit' => 200]);
        $periodos = $this->Ofertas->Periodos->find('list', ['limit' => 200]);
        $this->set(compact('oferta', 'materias', 'periodos'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Oferta id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $oferta = $this->Ofertas->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $oferta = $this->Ofertas->patchEntity($oferta, $this->request->getData());
            if ($this->Ofertas->save($oferta)) {
                $this->Flash->success(__('The oferta has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The oferta could not be saved. Please, try again.'));
        }
        $materias = $this->Ofertas->Materias->find('list', ['limit' => 200]);
        $periodos = $this->Ofertas->Periodos->find('list', ['limit' => 200]);
        $this->set(compact('oferta', 'materias', 'periodos'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Oferta id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $oferta = $this->Ofertas->get($id);
        if ($this->Ofertas->delete($oferta)) {
            $this->Flash->success(__('The oferta has been deleted.'));
        } else {
            $this->Flash->error(__('The oferta could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
