<?php
$this->request->session();
$userid = $this->request->session()->read("userid");
foreach ($ship as $value) {
  echo $value['id'];
  foreach ($carts as $cart) {
    echo $cart['Id'];
 ?>
 <?php
 echo $this->Html->create();
 echo $this->Html->input('userId',['type'=>'hidden','value'=>$userid]);
 echo $this->Html->input('name',['type'=>'hidden','value'=>$cart['itemName']]);
 echo $this->Html->input('price',['type'=>'hidden','value'=>$cart['itemPrice']]);
 echo $this->Html->input('quantity',['type'=>'hidden','value'=>$cart['quantity']]);
 echo $this->Html->input('total',['type'=>'hidden','value'=>$cart['total']]);
 echo $this->Html->input('statement',['type'=>'hidden','value'=>'yet']);
 echo $this->Html->end();
  ?>

<!-- foreachのための}} -->
<?php }} ?>
<!-- ^^^^^^^^^^^^^^^^^^^^^^^ -->
