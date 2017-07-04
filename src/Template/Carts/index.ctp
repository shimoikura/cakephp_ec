<?php echo $this->Form->create($carts,['url' => ['controller'=>'Carts','action' => 'update']]); ?>
<?php foreach ($carts as $value) { ?>
  <?php $length = count($carts); //foreachの回転回数?>
<div class="container-fluid">
  <div class="row cart-title-box">
    <h1 style="float:left;">Shopping Cart</h1>
    <p style="float:left; margin:10px 20px;">(<?php echo $length ?> Items)</p>
  </div>

  <?php echo "<table class='cart-table'>"; ?>
    <tr>
      <th colspan="2" style="width:40%;">Item Details</th>
      <th>Price</th>
      <th>Quantity</th>
      <th>Subtotal</th>
    </tr>
      <tr id="<?php echo $value->Id ?>-tr" class="dd">
        <td rowspan="2"><?php echo $this->Html->image($value->itemImg,['class'=>'cart-img']) ?></td>
        <td><?php echo $value->itemName ?></td>
        <td>Rs. <span class="cart-item-price"><?php echo $value->itemPrice ?></span></td>
        <?php $amounts = range(0, 5); ?>
        <td><?php echo $this->Form->select('quants',$amounts,array('id'=>"$value->Id-item-num",'class'=>'cart_subnum',"required"=>false, "errors"=>true,"label"=>false,"default"=>$value->quantity)); ?></td>
        <td>Rs. <span class="cart-subprice"><?php echo $value->totalPrice ?></span></td>
        <td style="display:none"><?php echo $value->Id ?></td>
      </tr>
      <tr>
        <td><?php echo $this->Html->link('✖ REMOVE',array('controller'=>'Carts','action'=>'delete',$value->Id)); ?>
      </tr>
      <tr>
        <td colspan="5"><hr></td>
      </tr>

      <?php
        echo $this->Form->input('Id[]',['type'=>'hidden','value'=>$value->Id]);
        echo $this->Form->input('itemId[]',['type'=>'hidden','value'=>$value->itemId]);
        echo $this->Form->input('itemName[]',['type'=>'hidden','value'=>$value->itemName]);
        echo $this->Form->input('itemPrice[]',['type'=>'hidden','value'=>$value->itemPrice]);
        echo $this->Form->input('itemImg[]',['type'=>'hidden','value'=>$value->itemImg]);
        echo $this->Form->input('quantity[]',['type'=>'hidden','value'=>$value->quantity,'id'=>$value->Id.'quantity']);
        echo $this->Form->input('totalPrice[]',['type'=>'hidden','value'=>$value->totalPrice,'id'=>$value->Id.'totalprice']);
       ?>
    <?php } ?>
    <p id="count" style="display:none;"><?php echo $length; ?></p>

  </table>
  <div class="check" style="float:right;">
    <?php echo $this->Form->submit('update',['type'=>'submit','name'=>'cartupdate','class'=>'btn','style'=>'margin:10px;']); ?>
  <?php echo $this->Form->end(); ?>
    <button type="button" class='btn btn-danger'><a href="<?php echo $this->Url->build('/alldelete', true) ?>" style="text-decoration:none; color:#fff; margin:10px;">Clear Shopping Cart</a></button>
    <hr>
    <p>TOTAL : Rs. <span id="total-price"></span></p><br>
    <button type="button" class='btn btn-success'><a href="<?php echo $this->Url->build('/buy', true) ?>" style="text-decoration:none; color:#fff;">PROCED TO CHECKOUT</a></button>
  </div>

</div>

<script type="text/javascript">
  $(document).ready(function(){
    var total = 0;
    function totalprice(count){
      total = 0;
      var j = 0;
      for (var i = 0; i < count; i++) {
        total = total + parseInt($(".dd").eq(j).children().eq(4).children().closest("span").text());
        j++;
      }
      return total;
    }

    var count = $("#count").text();
    $(".cart_subnum").change(function(){
      var tr = $(this).closest("tr").attr("id");//クリックされたtdの親（tr）のid取得
      var num = $('#' + this.id).val();
      var sub_total1 = $('#' + tr).children().eq(2).children().closest("span").text();
      var sub_total2 = num * sub_total1;
      var id = $('#' + tr).children().eq(5).text();
      $('#' + tr).children().eq(4).children().closest("span").text(sub_total2);
      count = $("#count").text();
      totalprice(count);
      $("#total-price").text(total);
      $('#' + id + 'quantity').val(num);
      $('#' + id + 'totalprice').val(sub_total2);
    })
    totalprice(count);
    $("#total-price").text(total);
  });
</script>
