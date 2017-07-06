<?php
namespace App\Controller;
use App\Controller\Appcontroller;
use Cake\Event\Event;
use Cake\View\Helper\HtmlHepler;

class OrdersController extends Appcontroller{

  public function beforeFilter(Event $event){
    parent::beforeFilter($event);
    $this->Auth->allow(['index']);
  }

  public function index(){
    $this->request->session();
    $this->request->session()->read("userid");
    $userid = $this->request->session()->read('userid');

    if ($userid == null) {
      $this->redirect("/login");
    }
// Carts information get      --------------------------------------------
    $this->loadModel("Carts");
    $userCarts = $this->paginate($this->Carts);
    $this->set('carts',$userCarts);
// ----------------------------------------------------------------------

// Ships information get      ----------------------------------------------
    $this->loadModel("Ships");
    $userShip = $this->Ships->find()->where(["userId" => $userid]);
    $userShip = $userShip->toArray();
    $this->set('ship',$userShip);
// ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^

    // ^^^^^^^^^^^^^^^^^^^^^^^^
    // cart内をすべて空にする
    // ^^^^^^^^^^^^^^^^^^^^^^^^^^^^
    // $this->loadModel("Carts");
    // $this->Carts->deleteAll(['Id >' => 0]);
  }
}

 ?>
