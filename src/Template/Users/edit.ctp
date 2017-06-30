<div class="container">
  <h2>Admin Edit User</h2>
  <?php echo $this->Form->create($edit); ?>
  <p style="margin:0;">role</p>
  <?php
  $roles = ["admin","coustomer"];
  echo $this->Form->select("role",$roles);
  ?>
  <p style="margin:0;">Name</p>
  <?php echo $this->Form->input('name',["label"=>false]) ?>
  <?php echo $this->Form->button('submit'); ?>
  <?php echo $this->Form->end(); ?>
</div>
