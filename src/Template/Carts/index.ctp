<div class="container-fluid">
  <div class="row cart-title-box">
    <h1 style="float:left;">Shopping Cart</h1>
    <p style="float:left; margin:10px 20px;">(2 Items)</p>
  </div>

  <?php echo "<table class='cart-table'>"; ?>
    <tr>
      <th colspan="2" style="width:40%;">Item Details</th>
      <th>Price</th>
      <th>Quantity</th>
      <th>Subtotal</th>
    </tr>
    <?php foreach ($carts as $value) { ?>
      <tr>
        <td rowspan="2"><?php echo $this->Html->image($value->itemImg,['class'=>'cart-img']) ?></td>
        <td><?php echo $value->itemName ?></td>
        <td>Rs. <?php echo $value->itemPrice ?></td>
        <?php $amounts = range(0, 5); ?>
        <td><?php echo $this->Form->select('quantity',$amounts,array('id'=>'sub-num',"required"=>false, "errors"=>true,"label"=>false,"default"=>$value->quantity)); ?></td>
        <td>Rs. <?php echo $value->totalPrice ?></td>
      </tr>
      <tr>
        <td><?php echo $this->Html->link('✖ REMOVE',array('controller'=>'Carts','action'=>'delete',$value->Id)); ?>
      </tr>
      <tr>
        <td colspan="5"><hr></td>
      </tr>
    <?php } ?>

  </table>
    <?php foreach ($carts as $value) { ?>
  <?php } ?>
  <button type="button" class='btn btn-primary' style="float:right;"><a href="<?php echo $this->Url->build('/buy', true) ?>" style="text-decoration:none; color:#fff;">PROCED TO CHECKOUT</a></button>

</div>
