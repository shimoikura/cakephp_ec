<?php
namespace App\Controller;
use App\Controller\Appcontroller;
use Cake\Event\Event;

class CartsController extends AppController
{
  public function beforeFilter(Event $event)
  {
    parent::beforeFilter($event);
    $this->Auth->allow(['index','delete','update','alldelete']);
  }

  public function index(){
    $carts = $this->paginate($this->Carts);
    if(count($carts)==null)
    {
      $this->redirect('/');
      $this->Flash->error("Your shopping cart is empty");
    }
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

  public function update()
  {
    $this->autoRender = false; //.ctp file が必要ないとき
    $id = $this->request->data['Id'];
    for ($i=0; $i <count($id) ; $i++) {
      $idnumber = $this->request->data['Id'][$i];
      $query = $this->Carts->query();
      $query->update()
        ->set(['quantity' => $this->request->data['quantity'][$i],
                'totalPrice' => $this->request->data['totalPrice'][$i]])
        ->where(['Id' => $idnumber])
        ->execute();
    }
    if ($this->request->data['tobuy']) {
      $this->redirect('/buy');
    }
  }

  public function alldelete(){
    $this->autoRender = false; //.ctp file が必要ないとき
    $this->Carts->deleteAll(['Id >' => 0]);
    $this->redirect("/");
    $this->Flash->error("Your shopping cart is empty");
  }

  public function makesession(){
    $this->autoRender = false;
    $total = $_POST['total'];
    $num = $_POST['num'];
    $this->request->session();
    $this->request->session()->write('carttotal',$total);
    $this->request->session()->write('cartnum',$num);
    echo 'hello';
  }
}

 ?>
