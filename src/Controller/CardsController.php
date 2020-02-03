<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Cards Controller
 *
 * @property \App\Model\Table\CardsTable $Cards
 *
 * @method \App\Model\Entity\Card[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CardsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Collections']
        ];
        $cards = $this->paginate($this->Cards);

        $this->set(compact('cards'));
    }

    /**
     * *Search method
     * 
     */
    public function search($q = null)
    {
        //Si no se da una busqueda
        if(is_null($q))
            //no retorna nada
            return;
        //Esto sirve para que el controlador no muestre una vista HTML sino que retorbna JSON
        $this->RequestHandler->respondAs('json');
        $this->response->type('application/json');  
        $this->autoRender = false; 

        //datos de respuesta
        $this->loadComponent("ScryFall");
        
        $data = $this->ScryFall->buscarCartas($q)["data"];
        
        $response = [];
        foreach($data as $c )
        {
            $response[] = (object)[
                "id"=> $c["id"],
                "set_url_imagen" => $this->getSetUrlImagen($c["set"]),
                "name"=>$c["name"]
            ];
        }
        echo json_encode($response);
    }

    /**
     * Obtiene la url de la imagen de un set (collection) dado su código
     */
    
    private function getSetUrlImagen($set)
    {
        $this->loadModel('Collections');
        return $this->Collections->get($set)["url_image"];  

    }

    /**
     * View method
     *
     * @param string|null $id Card id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $card = $this->Cards->get($id, [
            'contain' => ['Collections', 'Users']
        ]);

        $this->set('card', $card);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $card = $this->Cards->newEntity();
        if ($this->request->is('post')) {
            $card = $this->Cards->patchEntity($card, $this->request->getData());
            if ($this->Cards->save($card)) {
                $this->Flash->success(__('The card has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The card could not be saved. Please, try again.'));
        }
        $collections = $this->Cards->Collections->find('list', ['limit' => 200]);
        $users = $this->Cards->Users->find('list', ['limit' => 200]);
        $this->set(compact('card', 'collections', 'users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Card id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $card = $this->Cards->get($id, [
            'contain' => ['Users']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $card = $this->Cards->patchEntity($card, $this->request->getData());
            if ($this->Cards->save($card)) {
                $this->Flash->success(__('The card has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The card could not be saved. Please, try again.'));
        }
        $collections = $this->Cards->Collections->find('list', ['limit' => 200]);
        $users = $this->Cards->Users->find('list', ['limit' => 200]);
        $this->set(compact('card', 'collections', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Card id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $card = $this->Cards->get($id);
        if ($this->Cards->delete($card)) {
            $this->Flash->success(__('The card has been deleted.'));
        } else {
            $this->Flash->error(__('The card could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
