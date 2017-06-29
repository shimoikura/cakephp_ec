<div class="container" id="buy-box">
  <div class="row">
    <div class="col-md-2 col-sm-2">
    </div>
    <div class="buy col-md-8 col-sm-8">
      <ul class="step">
        <li class="step1 active">
          <span class="cart-icon glyphicon glyphicon-shopping-cart cart-active" style="position:absolute;
          top:6px;"></span>
          <p>Adress</p>
        </li>
        <li class="step1">
          <span class="glyphicon glyphicon-shopping-cart cart-icon" style="position:absolute;
          top:6px;"></span>
          <p>	Deliverty & Payment	</p>
        </li>
        <li class="step1">
          <span class="glyphicon glyphicon-shopping-cart cart-icon" style="position:absolute;
          top:6px;"></span>
          <p>Gift</p>
        </li>
        <li class="step1">
          <span class="glyphicon glyphicon-shopping-cart cart-icon" style="position:absolute;
          top:6px;"></span>
          <p>Check</p>
        </li>
        <li class="step1">
          <span class="glyphicon glyphicon-shopping-cart cart-icon"  style="position:absolute;
          top:6px;"></span>
          <p>Complete Payment</p>
        </li>
      </ul>
      <!-- Step1 -->
      <div id="step1" class="buy-step">
        <h3>Destination</h3>
        <?php echo $this->Form->create($ship); ?>
          <?php $this->request->session();?>
          <?php echo $this->Form->input("userId",['id'=>'buy-userid','type'=>"hidden",'required'=>false,'errors'=>true,'value'=>$this->request->session()->read('userid')]) ?>
        <div class="form-group">
          <?php echo $this->Form->input("name",['placeholder'=>"User Name","label"=>"User Name",'errors'=>true,'required'=>false]) ?>
        </div>
        <div class="form-group">
          <?php echo $this->Form->input("phone",['placeholder'=>"Phone Number","label"=>"Phone Number",'required'=>false,'errors'=>true,'type'=>'text']) ?>
        </div>
        <div class="form-group">
          <?php echo $this->Form->input("address",['placeholder'=>"Adress","label"=>"Adress",'required'=>false,'errors'=>true]) ?>
        </div>
        <div class="form-group">
          <?php echo $this->Form->input("email",['placeholder'=>"Mail Address","label"=>"Mail Address",'required'=>false,'errors'=>true,'type'=>'email']) ?>
        </div>
        <div class="dis_table">
          <?php
          if ($this->request->session()->read('userid') === null) {
            echo "<button class='btn green'><a style='text-decoration:none; color:#333;' href=" .$this->Url->build('/login', true). ">
            Next</a></button>";
          }
          else {
            echo $this->Form->submit("Next",['class'=>'btn green','id'=>"btn-step1",'type'=>'submit']);
          }
          ?>
        </div>
        <?php echo $this->Form->end(); ?>
      </div>
      <!-- Step2 -->
      <div id="step2" class="buy-step">
        <div class="form-group">
          <label for="deli">Delivary</label>
          <ul>
            <li><input type="radio" name="deli" value="home" checked="checked">Home</li>
            <li><input type="radio" name="deli" value="office">office</li>
            <li><input type="radio" name="deli" value="convini">Convinience store</li>
          </ul>
            <label for="">Payment</label>
            <ul>
              <li><input type="radio" name="payment" value="card" checked="checked">Card</li>
              <li><input type="radio" name="payment" value="cash">Cash on delivery</li>
              <li><input type="radio" name="payment" value="bank">Bank transfer</li>
              <li><input type="radio" name="payment" value="convini">Covinience store</li>
            </ul>
          </div>
        <div class="dis_table">
          <input id="btn-step2" type="button" class="btn green" value="Next">
          <a href="">back</a>
        </div>
      </div>
      <!-- Step3 -->
      <div id="step3" class="buy-step">
        <div class="form-group">
          <form action="buy-pass.php" method="post">
            <label for="gift">Gift</label>
            <ul>
              <li><input type="radio" name="gift" value="wrap" checked="checked">Gift wrapping</li>
              <li><input type="radio" name="gift" value="nowrap">No wrapping</li>
            </ul>
            <div class="dis_table">
              <input id="btn-step3" type="submit" name="buy-submit" class="btn green" value="Next">
              <a href="">back</a>
            </div>
          </form>
        </div>
      </div>

    </div>
  </div>

</div>
