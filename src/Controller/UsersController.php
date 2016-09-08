<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;



/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 */
class UsersController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */

    public $components = array('Auth');
    public function profile() 
    {
        $user = $this->Auth->User();
            $this->loadModel('Posts');
            $posts = $this->Posts->find()
                                ->where(['user_id' => $this->Auth->user('id')])
                                ->all();
        $this->set('user', $user);
        $this->set('yourPosts', $posts);
    }
        
    public function dashboard()
    {
        $this->loadModel('Posts');
        $posts = $this->Posts->find()->all();
        $this->set('userposts', $posts);
    }

    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        // $this->Auth->allow('add' , 'edit');
    }

    public function login()
    {
        if ($this->request->is('post'))
        {
            $user = $this->Auth->identify();
            if($user)
                {
                    $this->Auth->setUser($user);
                    $this->Flash->success(_("Login Successfully"));
                    // return $this->redirect($this->Auth->redirectUrl());
                }
                else
                {
                    $this->Flash->error(_("Invalid email or password, try again"));
                }
        }
    }
    
    public function initialize()
    {
        parent::initialize();
        
    }
    public function logout()
    {
        $this->Flash->success('You are now logged out.');
        return $this->redirect($this->Auth->logout());
    }
    
    public function index()
    {
        $users = $this->paginate($this->Users);

        $this->set(compact('users'));
        $this->set('_serialize', ['users']);
    }

    /**
     * View method
     *
     * @param string|null $id User id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => []
        ]);

        $this->set('user', $user);
        $this->set('_serialize', ['user']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) 
        {       
                if($this->request->data['password'] != $this->request->data['confirm-password'])
                {
                    $this->Flash->error("The passwords are not same");
                    return $this->redirect(['action' => 'add']);
                }
                unset($this->request->data['confirm-password']);
                    $user = $this->Users->patchEntity($user, $this->request->data);
                    // pr($user); die;
                    if ($this->Users->save($user)) 
                    {
                        $this->Flash->success(__('The user has been saved.'));
                        // return $this->redirect(['action' => 'index']);
                        return $this->redirect(['action' => 'dashboard']);
                    } 
                    else 
                    {
                        $this->Flash->error(__('The user could not be saved. Please, try again.'));
                    }
        }
        $this->set(compact('user'));
        $this->set('_serialize', ['user']);
    }
    

    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->data);
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The user could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('user'));
        $this->set('_serialize', ['user']);
    }

    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success(__('The user has been deleted.'));
        } else {
            $this->Flash->error(__('The user could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
    public function isAuthorized($user)
    {
        return true;
    }
}
