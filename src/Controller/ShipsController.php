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
    $ship = $this->Ships->newEntity();
    $this->request->session();
    $this->request->session()->read("userid");
    if ($this->request->session()->read("userid") == null) {
      $this->redirect(["controller"=>"users",'action'=>'login']);
    }
    if ($this->request->is('POST')) {
      $ship = $this->Ships->patchEntity($ship,$this->request->getData());
    }
    $this->set('ship',$ship);
  }
}
 ?>
