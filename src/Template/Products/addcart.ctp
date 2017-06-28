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
        <?php echo $this->Html->link('PROCED TO CHECKOUT',['controller'=>'users','action'=>'register'],['class'=>'btn btn-primary']) ?>
        <button class='btn btn-primary' type='button'>VIEW CART</button>
      </div>
    </div>
    <?php echo $addpro->id; ?>

  </div>
</div>

<script>
  $(document).ready(function(){
    $("#delete-page").click(function(){
      $(".add-text-box").hide('slow');
    })
  });
</script>
