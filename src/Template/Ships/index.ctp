<div class="container" id="buy-box">
  <div class="row">
    <h3>Destination</h3>
    <div class="buy col-md-4 col-sm-4">
      <!-- Step1 -->
      <div id="step1" class="buy-step">
        <?php echo $this->Form->create(null,['url'=>['controller'=>'Ships','action'=>'review']]); ?>
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
        <div class="form-group">
          <label for="delivery">Delivary</label>
          <ul style="list-style-type: none;">
            <li><?php echo $this->Form->radio('delivery',
            [
              ['value'=>'home','text'=>'home'],
              ['value'=>'Office','text'=>'Office'],
              ['value'=>'convini','text'=>'Convinience store']
            ]) ?></li>
          </ul>
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
          <?php echo $this->Form->input("billing_zip",['id'=>'billzip1',"label"=>"Billing Zip",'required'=>false,'errors'=>true]) ?>
        </div>
        <div class="form-group">
          <?php echo $this->Form->input("billing_country",['id'=>'billcountry1',"label"=>"Billing Country",'required'=>false,'errors'=>true]) ?>
        </div>
        <div class="form-group">
            <label for="">Payment</label>
            <ul>
              <li><?php echo $this->Form->radio('payment',
              [
                ['value'=>'card','text'=>'Card'],
                ['value'=>'cash','text'=>'Cash on delivery'],
                ['value'=>'bank','text'=>'Bank transfer'],
                ['value'=>'convini','text'=>'Covinience store']
              ]) ?></li>
            </ul>
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
          <?php echo $this->Form->input("shipping_zip",['id'=>'billzip2',"label"=>"Shipping Zip",'required'=>false,'errors'=>true]) ?>
        </div>
        <div class="form-group">
          <?php echo $this->Form->input("shipping_country",['id'=>'billcountry2',"label"=>"Shipping Country",'required'=>false,'errors'=>true]) ?>
        </div>
        <div class="form-group">
          <label for="gift">Gift</label>
          <ul>
            <li><?php echo $this->Form->radio('gift',
            [
              ['value'=>'wrap','text'=>'Gift wrapping'],
              ['value'=>'nowrap','text'=>'No wrapping']
            ]) ?></li>
          </ul>
        </div>
      </div>
      <div class="dis_table">
        <?php
          echo $this->Form->submit("Submit",['class'=>'btn green','id'=>"btn-step1",'type'=>'submit']);
        ?>
      </div>
      <?php echo $this->Form->end(); ?>
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
