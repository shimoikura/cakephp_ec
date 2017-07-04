<?php
  namespace App\Controller;
  use App\Controller\Appcontroller;
  use Cake\Event\Event;
  use Cake\View\Helper\HtmlHepler;


  class UsersController extends AppController{

    public function beforeFilter(Event $event)
    {
      parent::beforeFilter($event);
      $this->Auth->allow(['register','index','login','logout','dushboard','view','edit','custoedit']);
    }
    public function index(){
      $users = $this->paginate($this->Users);
      $this->set("users",$users);
    }
    public function login(){
        if ($this->request->is("POST")) {
          $target= $this->request->data['targetPage'];
          $targetArray = ['carts','ships','register'];

          $user = $this->Auth->identify();
          if ($user) {
            $this->Auth->setUser($user);
            $this->Users->id = $this->Auth->user("id"); //ユニークなidをセーブする
            $this->Users->name = $this->Auth->user("name");
            $this->Users->role = $this->Auth->user("role");

            $this->request->session();
            $this->request->session()->write("userid",$this->Users->id);
            $this->request->session()->write("username",$this->Users->name);
            $this->request->session()->write("userrole",$this->Users->role);

            $this->Flash->success("You could login successfully.");
            // $this->redirect(['controller'=>'products','action'=>'admin']);
            if(in_array($target,$targetArray))
            {
              $this->redirect('/'.$target);
            }
            else{
            $this->redirect('/');
            }
          }
          else {
            $this->Flash->error("You have not logined.");
          }
        }
        else {
          // echo "string";
          // $url = $this->referer();
        }
    }
    public function logout(){
      $this->request->session();
      if ($this->request->session()->read('userrole') === "admin") {
        $this->redirect('/');
      }
      else {
        $this->redirect($this->referer());
      }
      $this->request->session()->destroy();
    }
    public function register(){
      $user = $this->Users->newEntity();//first time
      if ($this->request->is("POST")) {
        $user = $this->Users->patchEntity($user,$this->request->getData());
        // echo "<pre>";
        // print_r($user);
        // exit();
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

    public function dushboard(){
      $this->request->session();
      if ($this->request->session()->read('userid') === null) {
        return $this->redirect(array("action"=>"login"));
      }
      else {
        $user = $this->Users->get($this->request->session()->read('userid'));
      }
      $this->set('dushboard',$user);
    }

    public function view($id = null){
      $user = $this->Users->get($id,["contain"=>[]]);
      $user = $this->Users->patchEntity($user,$this->request->getData());
      // echo $user;
      $this->set('view',$user);
    }

    public function edit($id = null){
      $user = $this->Users->get($id,["contain"=>[]]);
      if ($this->request->is(["post","put"])) {
        $user = $this->Users->patchEntity($user,$this->request->getData());
        if ($this->Users->save($user)) {
          $this->Flash->success("The user information is successfully updated.");
          return $this->redirect(["action"=>"index"]);
        }
        else {
          $this->Flash->error("The user information is not updated.");
        }
      }
      else {
      }
      $this->set('edit',$user);
    }

    public function custoedit(){
      $this->request->session();
      if ($this->request->session()->read('userid') === null) {
        return $this->redirect(array("action"=>"login"));
      }
      else {
        $user = $this->Users->get($this->request->session()->read('userid'));
        if ($this->request->is(["post","put"])) {
          $user = $this->Users->patchEntity($user,$this->request->getData());
          echo $this->Users->get($this->request->session()->read('userid'));
          if ($this->Users->save($user)) {
            $this->Flash->success("Your user information is successfully updated.");
            return $this->redirect(["action"=>"dushboard"]);
          }
          else {
            $this->Flash->error("Your user information is not updated.");
          }
        }
        else {
          }
        $this->set('customer',$user);
      }
    }
  }

 ?>
