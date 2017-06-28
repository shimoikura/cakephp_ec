<?php
namespace App\Controller;
use App\Controller\Appcontroller;
use Cake\Event\Event;

class CartsController extends AppController
{
  public function beforeFilter(Event $event)
  {
    parent::beforeFilter($event);
    $this->Auth->allow(['index']);
  }

  public function index(){
    $carts = $this->paginate($this->Carts);
    $this->set("carts",$carts);
  }
}

 ?>
