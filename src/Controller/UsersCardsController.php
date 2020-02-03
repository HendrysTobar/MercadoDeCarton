<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * UsersCards Controller
 *
 * @property \App\Model\Table\UsersCardsTable $UsersCards
 *
 * @method \App\Model\Entity\UsersCard[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UsersCardsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users', 'Cards']
        ];
        $usersCards = $this->paginate($this->UsersCards);

        $this->set(compact('usersCards'));
    }

    /**
     * View method
     *
     * @param string|null $id Users Card id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $usersCard = $this->UsersCards->get($id, [
            'contain' => ['Users', 'Cards']
        ]);

        $this->set('usersCard', $usersCard);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $usersCard = $this->UsersCards->newEntity();
        if ($this->request->is('post')) {
            $usersCard = $this->UsersCards->patchEntity($usersCard, $this->request->getData());
            if ($this->UsersCards->save($usersCard)) {
                $this->Flash->success(__('The users card has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The users card could not be saved. Please, try again.'));
        }
        $users = $this->UsersCards->Users->find('list', ['limit' => 200]);
        $cards = $this->UsersCards->Cards->find('list', ['limit' => 200]);
        $this->set(compact('usersCard', 'users', 'cards'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Users Card id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $usersCard = $this->UsersCards->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $usersCard = $this->UsersCards->patchEntity($usersCard, $this->request->getData());
            if ($this->UsersCards->save($usersCard)) {
                $this->Flash->success(__('The users card has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The users card could not be saved. Please, try again.'));
        }
        $users = $this->UsersCards->Users->find('list', ['limit' => 200]);
        $cards = $this->UsersCards->Cards->find('list', ['limit' => 200]);
        $this->set(compact('usersCard', 'users', 'cards'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Users Card id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $usersCard = $this->UsersCards->get($id);
        if ($this->UsersCards->delete($usersCard)) {
            $this->Flash->success(__('The users card has been deleted.'));
        } else {
            $this->Flash->error(__('The users card could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
