<div class="container box-login">
  <!-- <form class="form-signin" action="login.php" method="post"> -->
  <?php echo $this->Form->create(false,array(
    'class'=>'form-signin1'
      )); ?>
    <h2 class="form-signin-heading">Please sign in</h2>
    <?php echo $this->Form->input('email',array(
      'class'=>'form-control',
      'placeholder'=>'email',
      'label' => false,
      'type'=>"text")) ?>
    <?php echo $this->Form->input('password',array(
      'class'=>'form-control',
      'placeholder'=>'password',
      'label' => false,
      'type'=>"text")) ?>
    <?php echo $this->Form->submit('submit',array(
      'class'=>'btn btn-primary',
      'type'=>'submit'
    )) ?>
    <!-- <input type="text" class="input-block-level" placeholder="Email address" name="email"> -->

  <?php echo $this->Form->end(); ?>

    <!-- <p>New customer? <a href="registration.php">Start here</a></p>
    <p><a href="index.php">HOME</a></p> -->
</div> <!-- /container -->
