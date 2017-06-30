<div class="container box-register">
  <?php echo $this->Form->create($yoshiki,array('class'=>"from-user-register")); ?>
    <h2>Registration</h2>
    <table>
      <tr>
        <th>User Name</th>
        <td><?php echo $this->Form->input('name',array('placeholder'=>'Username','required'=>false,'errors'=>true,'label' => false,'type'=>"text")) ?></td>
      </tr>
      <tr>
        <th>Email</th>
        <td><?php echo $this->Form->input('email',array('placeholder'=>'email','required'=>false,'errors'=>true,'label' => false,'type'=>"text")) ?></td>
      </tr>
      <tr>
        <th>Password</th>
        <td><?php echo $this->Form->input('password',array('placeholder'=>'password','required'=>false,'errors'=>true,'label' => false,'type'=>"password")) ?></td>
      </tr>
      <tr>
        <th>Phone Number</th>
        <td><?php echo $this->Form->input('phone',array('placeholder'=>'ex.000000000000','required'=>false,'errors'=>true,'label' => false,'type'=>"text")) ?></td>
      </tr>
      <tr>
        <th>City</th>
        <td><?php echo $this->Form->input('city',array('placeholder'=>'ex.Delhi','required'=>false,'errors'=>true,'label' => false,'type'=>"text")) ?></td>
      </tr>
      <tr>
        <th>Country</th>
        <td><?php echo $this->Form->input('country',array('placeholder'=>'ex.India','required'=>false,'errors'=>true,'label' => false,'type'=>"text")) ?></td>
      </tr>
      <tr>
        <th>Date of Birth</th>
        <?php
        $y1 = 2017;
        $years = range($y1,1900);
        $months = range(1,12);
        $days = range(1,31);
         ?>
        <td>
          <?php echo $this->Form->select('year',$years,['default'=>$y1]) ?>
          <?php echo $this->Form->select('month',$months,['default'=>'0']) ?>
          <?php echo $this->Form->select('day',$days,['default'=>'0']) ?>
        </td>
      </tr>
    </table>
    <?php echo $this->Form->input('role',['type'=>'hidden','value'=>'admin']); ?>
    <!-- <?php echo $this->Form->input('Confirm password',array('placeholder'=>'Confirm password','required'=>false,'errors'=>true,'label' => false)) ?> -->
    <!-- <?php echo $this->form->dateTime('registered', ['year' => ['class' => 'year-classname',],'month' => ['class' => 'month-class','data-type' => 'month'],'hour'=>false,'minute'=>false,'meridian'=>false]) ?> -->

    <?php echo $this->Form->submit('submit') ?>
    <!-- <input type="text" class="input-block-level" placeholder="Email address" name="email"> -->

  <?php echo $this->Form->end(); ?>

</div> <!-- /container -->
