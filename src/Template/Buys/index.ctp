<div class="container" id="buy-box">
  <div class="row">
    <div class="col-md-2 col-sm-2">
    </div>
    <div class="buy col-md-8 col-sm-8">
      <ul class="step">
        <li class="step1 active">
          <span class="glyphicon glyphicon-shopping-cart cart-icon cart-active"></span>
          <p>Adress</p>
        </li>
        <li class="step1">
          <span class="glyphicon glyphicon-shopping-cart cart-icon"></span>
          <p>	Deliverty & Payment	</p>
        </li>
        <li class="step1">
          <span class="glyphicon glyphicon-shopping-cart cart-icon"></span>
          <p>Gift</p>
        </li>
        <li class="step1">
          <span class="glyphicon glyphicon-shopping-cart cart-icon"></span>
          <p>Check</p>
        </li>
        <li class="step1">
          <span class="glyphicon glyphicon-shopping-cart cart-icon" ></span>
          <p>Complete Payment</p>
        </li>
      </ul>
      <!-- Step1 -->
      <div id="step1" class="buy-step">
        <?php echo $this->Form->create(); ?>
        <div class="form-group">
          <?php echo $this->Form->input("User Name") ?>
          <!-- <label for="name">User Name</label><br>
          <input id="buy-name" type="text" name="name" placeholder="User Name"> -->
        </div>
        <div class="form-group">
          <label for="phone">Phone Number</label><br>
          <input id="buy-phone" type="text" name="phone" placeholder="Phone Number">
        </div>
        <div class="form-group">
          <label for="address">Adress</label><br>
          <input id="buy-address"type="text" name="address" placeholder="Adress">
        </div>
        <div class="form-group">
          <label for="email">Mail Address</label><br>
          <input id="buy-email" type="email" name="email" placeholder="Mail Address">
        </div>
        <div class="dis_table">
          <input id="btn-step1" type="button" class="btn green" value="Next">
        </div>
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
