<?php
  namespace App\Controller;
  use App\Controller\Appcontroller;
  use Cake\Event\Event;
  use Cake\View\Helper\HtmlHepler;

  class ProductsController extends AppController{

    public function beforeFilter(Event $event)
    {
      parent::beforeFilter($event);
      $this->Auth->allow(['index','admin','page','addcart']);
    }
    public function index(){
      $products = $this->paginate($this->Products);
      $this->set("products",$products);
    }

    public function admin(){
      $product = $this->Products->newEntity();//first time
      // echo "<pre>";
      // print_r($this->request->data);
      $this->request->session();
      $this->request->session()->read("userid");
      if ($this->request->session()->read("userid") == null) {
        $this->redirect(["controller"=>"users",'action'=>'login']);
      }
      if ($this->request->is('post')) {
        $img = $this->request->data['imgName'];
        $image_name = $img['name'];
        $image_size = $img['size'];
        if ($image_size < 100000) {
          $image_name = time()."_".$image_name;
          $this->request->data['imgName'] = $image_name;
          // print_r($this->request->data);
          $product = $this->Products->patchEntity($product,$this->request->data);

          if ($this->Products->save($product)) {
            $this->Flash->success("Your product is successfully created.");
            move_uploaded_file($img['tmp_name'],WWW_ROOT."img/".$image_name);

          }
          else {
            $this->Flash->error("Your product is not created.");  //Flash is class
          }
        }
        else {
          $this->Flash->error("Your image size is too lerge.");  //Flash is class
        }

      }
      $this->set('product',$product);

    }

    public function page($id = null){
      $product = $this->Products->get($id);
      $products = $this->paginate($this->Products);

      if ($this->request->is("POST")) {
        // echo $request->getMethod();
        //sessionがなければ、ログインページへ移動　↓
              $this->request->session();
              $this->request->session()->read("userid");
              if ($this->request->session()->read("userid") == null) {
                $this->redirect(["controller"=>"users",'action'=>'login']);
              }
              else {
                $this->redirect(["action"=>"addcart"]);
              }
      }
      else {

      }
      // echo $product;
      $this->set('product',$product);
    }

    public function addcart(){
      $addpro = $this->Products->get($_POST['id']);
      echo $addpro;
      $this->set('addpro',$addpro);
    }
  }

 ?>
