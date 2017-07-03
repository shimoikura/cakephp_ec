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
      <tr id="<?php echo $value->Id ?>-tr" class="dd">
        <td rowspan="2"><?php echo $this->Html->image($value->itemImg,['class'=>'cart-img']) ?></td>
        <td><?php echo $value->itemName ?></td>
        <td>Rs. <span class="cart-item-price"><?php echo $value->itemPrice ?></span></td>
        <?php $amounts = range(0, 5); ?>
        <td><?php echo $this->Form->select('quantity',$amounts,array('id'=>"$value->Id-item-num",'class'=>'cart_subnum',"required"=>false, "errors"=>true,"label"=>false,"default"=>$value->quantity)); ?></td>
        <td>Rs. <span class="cart-subprice"><?php echo $value->totalPrice ?></span></td>
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

<script type="text/javascript">
  $(document).ready(function(){
    $(".cart_subnum").change(function(){
      var tr = $(this).closest("tr").attr("id");//クリックされたtdの親（tr）のid取得
      var num = $('#' + this.id).val();
      var sub_total1 = $('#' + tr).children().eq(2).children().closest("span").text();
      var sub_total2 = num * sub_total1;
      $('#' + tr).children().eq(4).children().closest("span").text(sub_total2);
    })
  });
</script>
