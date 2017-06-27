<?php
  namespace App\Controller;
  use App\Controller\Appcontroller;
  use Cake\Event\Event;
  class HomesController extends AppController
  {
    public function beforeFilter(Event $event)
    {
      parent::beforeFilter($event);
      $this->Auth->allow(['index','aboutus','contactus']);
    }
    public function index(){
      $this->loadModel('Products'); //違うモデルを読み込む
      $products = $this->paginate($this->Products);
      $this->set("products",$products);
    }
    public function aboutus(){

    }
    public function contactus(){

    }
  }

 ?>
