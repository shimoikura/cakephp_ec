<?php
namespace App\Controller;
use App\Controller\Appcontroller;
use Cake\Event\Event;
use Cake\View\Helper\HtmlHepler;
use Cake\ORM\TableRegistry;

class OrdersController extends Appcontroller{

  public function beforeFilter(Event $event){
    parent::beforeFilter($event);
    $this->Auth->allow(['index','goodbye']);
  }

  public function index(){
    $this->request->session();
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


// Insert to BuysTable     ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
    $this->loadModel("Buys");
    $articles = TableRegistry::get('Buys');

    if ($this->request->is('post')) {
      $allCarts = array();
      foreach ($userCarts as $cart) {
        array_push($allCarts,array(
          'userId' => $userid,
          'name' => $cart['itemName'],
          'price' => $cart['itemPrice'],
          'quantity' => $cart['quantity'],
          'total' => $cart['totalPrice'],
          'statement' => 'yet'
   ));
  }
    // Entities作成
    $entities = $articles->newEntities($allCarts);
    // Entitiesの分だけ保存処理
      foreach ($entities as $entity) {
        $articles->save($entity);
      }
    // ^^^^^^^^^^^^^^^^^^^^^^^^
    // cart内をすべて空にする
    // ^^^^^^^^^^^^^^^^^^^^^^^^^^^^
    $this->loadModel("Carts");
    $this->Carts->deleteAll(['Id >' => 0]);
    $this->redirect(['action'=>'goodbye']);
  }
}

  public function goodbye(){
    
  }
}

 ?>
