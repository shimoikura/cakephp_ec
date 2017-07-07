<?php
$this->request->session();
$userid = $this->request->session()->read("userid");

foreach ($ship as $value) {}

// ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
// 合計金額を計算
// ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
$totals = array();
foreach ($carts as $cart) {
  array_push($totals,array(
    'price' => $cart['totalPrice'],
));
}
$length = count($carts);
$total = 0;
for ($i=0; $i < $length; $i++) {
  $total += $totals[$i]['price'];
}
// ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
?>

<div class="container">
  <div class="row">
    <h2>Confirmation of order contents</h2>
    <!-- ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^ -->
    <!-- Shipping Address -->
    <!-- ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^ -->
    <div class="shipping-address-box col-md-4">
      <p style="font-size:24px;">Shipping Addres <span style="font-size:12px;"><?php echo $this->Html->link('Cnage',['controller'=>'Ships','action'=>'index']) ?></span></p>
      <p><?php echo $value['first_name']." ".$value['last_name']; ?></p>
      <p><?php echo $value['shipping_zip'] ?></p>
      <p><?php echo $value['shipping_address'].",".$value['shipping_address2'].",".$value['shipping_state'].",".$value['shipping_city'].",".$value['shipping_country'] ?></p>
      <p>Phone Number : <?php echo $value['phone'] ?></p>
    </div>

    <!-- ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^ -->
    <!-- Billing Adress -->
    <!-- ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^ -->
    <div class="billing-address-box col-md-4">
      <p style="font-size:24px;">Billing Addres <span style="font-size:12px;"><?php echo $this->Html->link('Cnage',['controller'=>'Ships','action'=>'index']) ?></span></p>
      <p><?php echo $value['first_name']." ".$value['last_name']; ?></p>
      <p><?php echo $value['billing_zip'] ?></p>
      <p><?php echo $value['billing_address'].",".$value['billing_address2'].",".$value['billing_state'].",".$value['billing_city'].",".$value['billing_country'] ?></p>
    </div>

    <!-- ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^ -->
    <!-- Check -->
    <!-- ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^ -->
    <div class="col-md-4">
      <?php
      echo $this->Form->create();
      echo $this->Form->submit('Order Confirmation',['class'=>'btn btn-success','name'=>'cartsubmit']);
      echo $this->Form->end();
       ?>
       <p style="float:left; font-size:22px; color:red;">Billing amount : </p>
       <p style="float:right; font-size:22px; color:red;">Rs. <?php echo $total; ?></p>
    </div>
  </div>
</div>


<!-- ^^^^^^^^^^^^^^^^^^^^^^^ -->
