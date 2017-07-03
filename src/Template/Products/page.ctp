
<script type="text/javascript">
  $(document).ready(function(){
    var unit_price = $("#subprice").text();
    $("#totalprice").text(unit_price);
    $("#vvv").val(unit_price);
    $("#sub-num").change(function(){
      var pro_subnum = $("#sub-num").val();
      var sub_total = unit_price * pro_subnum;
      $("#vvv").val(sub_total);
      $("#totalprice").text(sub_total);
    });
  });

</script>
<div class="container-fulid" id="page-container">
  <div class="row">
    <div class="col-sm-5 col-md-5 left-box">
      <?php echo $this->Html->Image($product->imgName); ?>
    </div>
    <div class="col-sm-7 col-md-7 right-box">
      <div class="clearfix">
        <h1><?php echo $product->proName ?></h1>
        <p id="category"><span>#</span>
        </p>
      </div>
      <p>Rs <span id="subprice"><?php echo $product->proPrice ?></span></p>
      <?php echo $this->Form->create(null,['url'=>['action'=>'addcart']]); ?>
      <div class="amount col-md-6">
        <?php
        echo $this->Form->label('Quantity:');
        $amounts = range(0, 12);
        echo $this->Form->select('quantity',$amounts,array('id'=>'sub-num',"required"=>false, "errors"=>true,"label"=>false,"default"=>"1"));
        ?>
      </div>
      <div class="subtotal col-md-6">
        <p>Sub total: Rs <span id="totalprice"></span></p>
        <?php echo $this->Form->input('totalPrice',['id'=>'vvv','type'=>'hidden']) ?>
      </div>
      <?php
      echo $this->Form->input('Id',['type'=>'hidden','value'=>$product->id]);
      echo $this->Form->input('itemId',['type'=>'hidden','value'=>$product->id]);
      $this->request->session();
      echo $this->Form->input('itemName',['type'=>'hidden','value'=>$product->proName]);
      echo $this->Form->input('itemPrice',['type'=>'hidden','value'=>$product->proPrice]);
      echo $this->Form->input('itemImg',['type'=>'hidden','value'=>$product->imgName]);
       ?>

      <?php echo $this->Form->button('ADD TO CART',['type'=>'submit','name'=>'btn-addcart']); ?>
      <?php echo $this->Form->button('BUY NOW',['type'=>'submit','name'=>'btn-buynow']); ?>
      <?php echo $this->Form->end(); ?>
    </div>
  </div>
</div>
