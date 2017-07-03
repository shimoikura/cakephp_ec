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
          <?php echo $this->Form->input("name",['placeholder'=>"User Name","label"=>"User Name",'errors'=>true,'required'=>false]) ?>
        </div>
        <div class="form-group">
          <?php echo $this->Form->input("phone",['placeholder'=>"Phone Number","label"=>"Phone Number",'required'=>false,'errors'=>true,'type'=>'text']) ?>
        </div>
        <div class="form-group">
          <?php echo $this->Form->input("email",['placeholder'=>"Mail Address","label"=>"Mail Address",'required'=>false,'errors'=>true,'type'=>'email']) ?>
        </div>
      </div>
    </div>

      <!-- Step2 -->
      <div class="buy col-md-4 col-sm-4">
      <div id="step2" class="buy-step">
        <div class="form-group">
          <?php echo $this->Form->input("address",['placeholder'=>"Adress","label"=>"Adress",'required'=>false,'errors'=>true]) ?>
        </div>
        <div class="form-group">
          <label for="delivery">Delivary</label>
          <ul>
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
      <!-- Step3 -->
      <div class="buy col-md-4 col-sm-4">
      <div id="step3" class="buy-step">
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
