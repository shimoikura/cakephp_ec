<?php
namespace App\Controller;
use App\Controller\Appcontroller;
use Cake\Event\Event;
use Cake\View\Helper\HtmlHepler;


class ShipsController extends AppController{
  public function beforeFilter(Event $event)
  {
    parent::beforeFilter($event);
    $this->Auth->allow(['index','review']);
  }
  public function index(){
    $this->request->session();
    $this->request->session()->read("userid");
    if ($this->request->session()->read("userid") == null) {
      $this->redirect("/login");
    }
    $valid= $this->Ships->newEntity();
    if($this->request->is('post'))
    {
      $valid = $this->Ships->patchEntity($valid,$this->request->getData());
    }
    $userid = $this->request->session()->read('userid');
    $user = $this->Ships->find()->where(["userId" => $userid]);
    $user = $user->toArray();
    $this->set('address',$user);
    $this->set(compact('valid'));

  }
}
 ?>
