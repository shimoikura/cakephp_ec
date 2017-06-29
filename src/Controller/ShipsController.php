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
  //  $this->request->session();
   //
  //  echo $this->request->session()->read('userid');

    if ($this->request->is('POST')) {
      $ship = $this->Ships->patchEntity($ship,$this->request->getData());
    }
    $this->set('ship',$ship);
  }
}
 ?>
