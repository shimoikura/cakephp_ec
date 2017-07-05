
<div class="container" id="buy-box">
  <div class="row">
    <h3>Adress</h3>

<!-- /////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
<!-- if Address information is emptuy.... -->
<!-- ///////////////////////////////////////////////////////////////////////////////////////// -->
<?php if(empty($address)){?>
  <!-- Step1 -->
  <div class="buy col-md-4 col-sm-4">
  <div id="step1" class="buy-step">
    <?php
    if (isset($valid)) {
      echo $this->Form->create($valid);
    }
    else {
      echo $this->Form->create();
    }
    ?>
      <?php $this->request->session();?>
      <?php echo $this->Form->input("userId",['id'=>'buy-userid','type'=>"hidden",'required'=>false,'errors'=>true,'value'=>$this->request->session()->read('userid')]) ?>
    <div class="form-group">
      <?php echo $this->Form->input("first_name",['placeholder'=>false,"label"=>"First Name",'errors'=>true,'required'=>false]) ?>
    </div>
    <div class="form-group">
      <?php echo $this->Form->input("last_name",['placeholder'=>false,"label"=>"Last Name",'errors'=>true,'required'=>false]) ?>
    </div>
    <div class="form-group">
      <?php echo $this->Form->input("email",["label"=>"Email",'required'=>false,'errors'=>true,'type'=>'email']) ?>
    </div>
    <div class="form-group">
      <?php echo $this->Form->input("phone",["label"=>"Phone",'required'=>false,'errors'=>true,'type'=>'text']) ?>
    </div>
  </div>
  </div>

  <!-- Step2 -->
  <div class="buy col-md-4 col-sm-4">
  <div id="step2" class="buy-step">
    <div class="form-group">
      <?php echo $this->Form->input("billing_address",['id'=>'billadd1-1',"label"=>"Billing Address",'required'=>false,'errors'=>true]) ?>
    </div>
    <div class="form-group">
      <?php echo $this->Form->input("billing_address2",['id'=>'billadd1-2',"label"=>"Billing Address2",'required'=>false,'errors'=>true]) ?>
    </div>
    <div class="form-group">
      <?php echo $this->Form->input("billing_city",['id'=>'billcity1',"label"=>"Billing City",'required'=>false,'errors'=>true]) ?>
    </div>
    <div class="form-group">
      <?php echo $this->Form->input("billing_state",['id'=>'billstate1',"label"=>"Billing State",'required'=>false,'errors'=>true]) ?>
    </div>
    <div class="form-group">
      <?php echo $this->Form->input("billing_zip",['type'=>'text','id'=>'billzip1',"label"=>"Billing Zip",'required'=>false,'errors'=>true]) ?>
    </div>
    <div class="form-group">
      <?php echo $this->Form->input("billing_country",['id'=>'billcountry1',"label"=>"Billing Country",'required'=>false,'errors'=>true]) ?>
    </div>
  </div>
  <div class="checkbox">
    <label style="font-size: .5em">
      <input type="checkbox" id="ship-check" value="">
      <span class="cr"><i class="cr-icon fa fa-check"></i></span>
            Copy Billing Address to Shipping
    </label>
  </div>
</div>
  <!-- Step3 -->
  <div class="buy col-md-4 col-sm-4">
  <div id="step3" class="buy-step">
    <div class="form-group">
      <?php echo $this->Form->input("shipping_address",['id'=>'billadd2-1',"label"=>"Shipping Address",'required'=>false,'errors'=>true]) ?>
    </div>
    <div class="form-group">
      <?php echo $this->Form->input("shipping_address2",['id'=>'billadd2-2',"label"=>"Shipping Address2",'required'=>false,'errors'=>true]) ?>
    </div>
    <div class="form-group">
      <?php echo $this->Form->input("shipping_city",['id'=>'billcity2',"label"=>"Shipping City",'required'=>false,'errors'=>true]) ?>
    </div>
    <div class="form-group">
      <?php echo $this->Form->input("shipping_state",['id'=>'billstate2',"label"=>"Shipping State",'required'=>false,'errors'=>true]) ?>
    </div>
    <div class="form-group">
      <?php echo $this->Form->input("shipping_zip",['id'=>'billzip2','type'=>'text',"label"=>"Shipping Zip",'required'=>false,'errors'=>true]) ?>
    </div>
    <div class="form-group">
      <?php echo $this->Form->input("shipping_country",['id'=>'billcountry2',"label"=>"Shipping Country",'required'=>false,'errors'=>true]) ?>
    </div>
  </div>
</div>

<!-- /////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
<!-- if Address information is already existed -->
<!-- /////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
<?php } else{   foreach ($address as $value) {?>
  <!-- Step1 -->
  <div class="buy col-md-4 col-sm-4">
  <div id="step1" class="buy-step">
    <?php
    if (isset($valid)) {
      echo $this->Form->create($valid);
    }
    else {
      echo $this->Form->create();
    }
    ?>
      <?php $this->request->session();?>
      <?php echo $this->Form->input("userId",['id'=>'buy-userid','type'=>"hidden",'required'=>false,'errors'=>true,'value'=>$this->request->session()->read('userid')]) ?>
    <div class="form-group">
      <?php echo $this->Form->input("first_name",['value'=>$value['first_name'],'placeholder'=>false,"label"=>"First Name",'errors'=>true,'required'=>false]) ?>
    </div>
    <div class="form-group">
      <?php echo $this->Form->input("last_name",['value'=>$value['last_name'],'placeholder'=>false,"label"=>"Last Name",'errors'=>true,'required'=>false]) ?>
    </div>
    <div class="form-group">
      <?php echo $this->Form->input("email",['value'=>$value['email'],"label"=>"Email",'required'=>false,'errors'=>true,'type'=>'email']) ?>
    </div>
    <div class="form-group">
      <?php echo $this->Form->input("phone",['value'=>$value['phone'],"label"=>"Phone",'required'=>false,'errors'=>true,'type'=>'text']) ?>
    </div>
  </div>
  </div>

  <!-- Step2 -->
  <div class="buy col-md-4 col-sm-4">
  <div id="step2" class="buy-step">
    <div class="form-group">
      <?php echo $this->Form->input("billing_address",['id'=>'billadd1-1','value'=>$value['billing_address'],"label"=>"Billing Address",'required'=>false,'errors'=>true]) ?>
    </div>
    <div class="form-group">
      <?php echo $this->Form->input("billing_address2",['id'=>'billadd1-2','value'=>$value['billing_address2'],"label"=>"Billing Address2",'required'=>false,'errors'=>true]) ?>
    </div>
    <div class="form-group">
      <?php echo $this->Form->input("billing_city",['id'=>'billcity1','value'=>$value['billing_city'],"label"=>"Billing City",'required'=>false,'errors'=>true]) ?>
    </div>
    <div class="form-group">
      <?php echo $this->Form->input("billing_state",['id'=>'billstate1','value'=>$value['billing_state'],"label"=>"Billing State",'required'=>false,'errors'=>true]) ?>
    </div>
    <div class="form-group">
      <?php echo $this->Form->input("billing_zip",['id'=>'billzip1','type'=>'text','value'=>$value['billing_zip'],"label"=>"Billing Zip",'required'=>false,'errors'=>true]) ?>
    </div>
    <div class="form-group">
      <?php echo $this->Form->input("billing_country",['id'=>'billcountry1','value'=>$value['billing_zip'],"label"=>"Billing Country",'required'=>false,'errors'=>true]) ?>
    </div>
  </div>
  <div class="checkbox">
    <label style="font-size: .5em">
      <input type="checkbox" id="ship-check" value="">
      <span class="cr"><i class="cr-icon fa fa-check"></i></span>
            Copy Billing Address to Shipping
    </label>
  </div>
  </div>
  <!-- Step3 -->
  <div class="buy col-md-4 col-sm-4">
  <div id="step3" class="buy-step">
    <div class="form-group">
      <?php echo $this->Form->input("shipping_address",['id'=>'billadd2-1','value'=>$value['shipping_address'],"label"=>"Shipping Address",'required'=>false,'errors'=>true]) ?>
    </div>
    <div class="form-group">
      <?php echo $this->Form->input("shipping_address2",['id'=>'billadd2-2','value'=>$value['shipping_address2'],"label"=>"Shipping Address2",'required'=>false,'errors'=>true]) ?>
    </div>
    <div class="form-group">
      <?php echo $this->Form->input("shipping_city",['id'=>'billcity2','value'=>$value['shipping_city'],"label"=>"Shipping City",'required'=>false,'errors'=>true]) ?>
    </div>
    <div class="form-group">
      <?php echo $this->Form->input("shipping_state",['id'=>'billstate2','value'=>$value['shipping_state'],"label"=>"Shipping State",'required'=>false,'errors'=>true]) ?>
    </div>
    <div class="form-group">
      <?php echo $this->Form->input("shipping_zip",['id'=>'billzip2','type'=>'text','value'=>$value['shipping_zip'],"label"=>"Shipping Zip",'required'=>false,'errors'=>true]) ?>
    </div>
    <div class="form-group">
      <?php echo $this->Form->input("shipping_country",['id'=>'billcountry2','value'=>$value['shipping_country'],"label"=>"Shipping Country",'required'=>false,'errors'=>true]) ?>
    </div>
  </div>
<?php }}?>

    <div class="dis_table">
      <?php
      if ($this->request->session()->read('userid') === null) {
        echo "<button class='btn green'><a style='text-decoration:none; color:#333;' href=" .$this->Url->build('/login', true). ">
        Next</a></button>";
      }
      else {
        echo $this->Form->submit("Submit",['class'=>'btn green','id'=>"btn-step1",'type'=>'submit']);
      }
      ?>
    </div>
  <?php echo $this->Form->end(); ?>
  </div>
  </div>

</div>
</div>



<script>
$(document).ready(function(){
  $('#ship-check').change(function(){
    if($('#ship-check').prop('checked')){
      var bill_add1 = $("#billadd1-1").val();
      var bill_add2 = $("#billadd1-2").val();
      var city = $("#billcity1").val();
      var state = $("#billstate1").val();
      var zip = $("#billzip1").val();
      var country = $("#billcountry1").val();
      $("#billadd2-1").val(bill_add1);
      $("#billadd2-2").val(bill_add2);
      $("#billcity2").val(city);
      $("#billstate2").val(state);
      $("#billzip2").val(zip);
      $("#billcountry2").val(country);
    }
  });
});
</script>
