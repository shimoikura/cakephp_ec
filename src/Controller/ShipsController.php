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

  }

  public function review($id = null){
    $ship = $this->Ships->newEntity();
    if ($this->request->is('POST')) {
      $ship = $this->Ships->patchEntity($ship,$this->request->getData());
      if ($this->Ships->save($ship)) {
        $this->Flash->success("success");
      }
      else {
        $this->Flash->error("error");
      }
    }
    $this->set('ship',$ship);
  }
}
 ?>
