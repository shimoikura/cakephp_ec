<?php
namespace App\Controller;
use App\Controller\Appcontroller;
use Cake\Event\Event;

class CartsController extends AppController
{
  public function beforeFilter(Event $event)
  {
    parent::beforeFilter($event);
    $this->Auth->allow(['index','delete']);
  }

  public function index(){
    $carts = $this->paginate($this->Carts);
    $this->set("carts",$carts);
  }

  public function delete($Id = null){
    $this->request->is(["post","delete"]);
    $item = $this->Carts->get($Id);
    if ($this->Carts->delete($item)) {
      $this->Flash->success("Item is deleted successfully.");
    }
    else {
      $this->Flash->error("Item is not found.");
    }
    return $this->redirect(["action"=>"index"]);
  }
}

 ?>
