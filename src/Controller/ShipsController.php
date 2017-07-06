<?php
namespace App\Controller;
use App\Controller\Appcontroller;
use Cake\Event\Event;
use Cake\View\Helper\HtmlHepler;


class ShipsController extends AppController{
  public function beforeFilter(Event $event)
  {
    parent::beforeFilter($event);
    $this->Auth->allow(['index']);
  }
  public function index(){
    $this->request->session();
    $this->request->session()->read("userid");
    $userid = $this->request->session()->read('userid');
    $user = $this->Ships->find()->where(["userId" => $userid]);
    $user = $user->toArray();
    foreach ($user as $value) {
      $id = $value['id'];
    }
    if ($this->request->session()->read("userid") == null) {
      $this->redirect("/login");
    }
    $valid= $this->Ships->newEntity();
    if($this->request->is('post'))
    {
      if (empty($user)) {
        $valid= $this->Ships->newEntity();
        $valid = $this->Ships->patchEntity($valid,$this->request->getData());
      }
      else {
        $valid = $this->Ships->get($id,["contain"=>[]]);
        $valid = $this->Ships->patchEntity($valid,$this->request->getData());
      }
      if ($this->Ships->save($valid)) {
        $this->Flash->success("Your Address is successfully created.");
        $this->redirect(['controller'=>'Orders','ation'=>'index']);
      }
      else {
        $this->Flash->error("Your Address is not created.");
      }
    }

    $this->set('address',$user);
    $this->set(compact('valid'));

  }
}
 ?>
