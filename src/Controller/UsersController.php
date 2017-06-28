<?php
  namespace App\Controller;
  use App\Controller\Appcontroller;
  use Cake\Event\Event;

  class UsersController extends AppController{

    public function beforeFilter(Event $event)
    {
      parent::beforeFilter($event);
      $this->Auth->allow(['register','index','login','logout']);
    }
    public function index(){
      $users = $this->paginate($this->Users);
      $this->set("users",$users);
    }
    public function login(){
        if ($this->request->is("POST")) {
          $user = $this->Auth->identify();
          if ($user) {
            $this->Auth->setUser($user);
            $this->Users->id = $this->Auth->user("id"); //ユニークなidをセーブする
            $this->request->session();
            $this->request->session()->write("userid",$this->Users->id);

            $this->Flash->success("You could login successfully.");
            $this->redirect(['controller'=>'products','action'=>'admin']);
          }
          else {
            $this->Flash->error("You could not login.");
          }
        }
    }
    public function logout(){
      $this->request->session();
      $this->request->session()->destroy();
      $this->redirect($this->referer());
    }
    public function register(){

      $user = $this->Users->newEntity();//first time
      if ($this->request->is("POST")) {
        $user = $this->Users->patchEntity($user,$this->request->getData());
        // print_r($user);
        if ($this->Users->save($user)) { //save() -> insert
          $this->Flash->success("Your registration is successfully created.");  //Flash is class
          return $this->redirect(array("action"=>"login")); //if function is same class,don't need Controller name.
        }//successしたときにメッセージ Flash messerge
        else {
          $this->Flash->error("Your registration is not created.....try again!");  //Flash is class
        }
      }
      else {
        echo "data not came";
      }
      $this->set('yoshiki',$user);
    }
  }

 ?>
