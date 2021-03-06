<div class="container-fluid">
  <div class="row">
    <div class="add-text-box">
      <p><?php echo $addpro->proName; ?> added to your cart</p>
      <span class="glyphicon glyphicon-remove" aria-hidden="true" id="delete-page"></span>
    </div>
    <div class="add-pro-box">
      <div class="add-pro-left col-md-5">
        <?php echo $this->Html->image($addpro->imgName,['class'=>'addpro-img img-responsive']) ?>
        <p style="color:gray; margin:20px;"><?php echo $addpro->proName; ?></p>
        <p>Rs. <span><?php echo $addpro->proPrice; ?></span></p>
      </div>
      <div class="add-pro-right col-md-7">
        <p>You order <span><?php echo $this->request->session()->read("cart-amount") ?></span> Item</p>
        <p>You Pay: Rs. <span><?php echo $this->request->session()->read("totalprice"); ?></span></p>
        <button type="button" class='btn btn-primary'><a href="<?php echo $this->Url->build('/buy', true) ?>" style="text-decoration:none; color:#fff">PROCED TO CHECKOUT</a></button>
        <?php echo $this->Html->link('VIEW CART',['controller'=>'carts','action'=>'index'],['class'=>'btn btn-primary']) ?>
      </div>
    </div>
  </div>
</div>

<script>
  $(document).ready(function(){
    $("#delete-page").click(function(){
      $(".add-text-box").hide('slow');
    })
  });
</script>
