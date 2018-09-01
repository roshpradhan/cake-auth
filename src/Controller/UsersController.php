<?php
namespace App\Controller;

use App\Controller\AppController;
use cake\Event\Event;
use cake\I18n\Time;
/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 *
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UsersController extends AppController
{
    
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $users = $this->paginate($this->Users);
        $this->set(compact('users'));
    }

    /**
     * View method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => []
        ]);

        $this->set('user', $user);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'profile']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $this->set(compact('user'));
    }
    
    /**
    * signup method
    *
    * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
    */
   public function signup()
   {
       $user = $this->Users->newEntity();
       if ($this->request->is('post')) {
           $user = $this->Users->patchEntity($user, $this->request->getData());
           if ($this->Users->save($user)) {
               $this->Flash->success(__('The user has been saved.'));

               return $this->redirect(['action' => 'index']);
           }
           $this->Flash->error(__('The user could not be saved. Please, try again.'));
       }
       $this->set(compact('user'));
   }
    public function login()
    {
        //log a user in
        if($this->Auth->user('id')){//CHECK IF USER IS ALREADY LOGGED IN
            $this->Flash->warning(__('You Are already Logged In'));
            return $this->redirect(['controller'=>'Users','action'=>'index']);
        }
         if($this->request->is('post')){
                            
            //if the user is not already logged in then, attempt to login the user
            $user = $this->Auth->identify();
            if($user){
                $this->Auth->setUser($user);
                //redirect
                $this->Flash->success(__('Log In Succesfull'));
                return $this->redirect(['controller'=>'Users','action'=>'index']);
            }else{
                $this->Flash->error(__('Sorry the Login Was not Succesfully'));
            }
                        
        }
    }
    //logout function
    public function logout(){
        $this->Flash->success('You Are Logged Out..');
        return $this->redirect($this->Auth->logout());
    }
    //before filter function to allow signup method
    public function beforeFilter(Event $event){
        $this->Auth->allow(['signup','forgotPassword']);
    }

    public function forgotPassword(){

    }
    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $this->set(compact('user'));
    }

    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects to index.
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
    public function search(){
        $xmlDoc=new DOMDocument();
        $xmlDoc->load("links.xml");

        $x=$xmlDoc->getElementsByTagName('link');

        //get the q parameter from URL
        $q=$_GET["q"];

        //lookup all links from the xml file if length of q>0
        if (strlen($q)>0) {
            $hint="";
            for($i=0; $i<($x->length); $i++) {
                $y=$x->item($i)->getElementsByTagName('title');
                $z=$x->item($i)->getElementsByTagName('url');
                if ($y->item(0)->nodeType==1) {
                    //find a link matching the search text
                    if (stristr($y->item(0)->childNodes->item(0)->nodeValue,$q)) {
                        if ($hint=="") {
                            $hint="<a href='" . 
                            $z->item(0)->childNodes->item(0)->nodeValue . 
                            "' target='_blank'>" . 
                            $y->item(0)->childNodes->item(0)->nodeValue . "</a>";
                        } else {
                            $hint=$hint . "<br /><a href='" . 
                            $z->item(0)->childNodes->item(0)->nodeValue . 
                            "' target='_blank'>" . 
                            $y->item(0)->childNodes->item(0)->nodeValue . "</a>";
                        }
                    }
                }
            }
        }

        // Set output to "no suggestion" if no hint was found
        // or to the correct values
        if ($hint=="") {
        $response="no suggestion";
        } else {
        $response=$hint;
        }

        //output the response
        echo $response;
        }
}
