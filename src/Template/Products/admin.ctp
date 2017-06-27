<div class="container">
  <?php echo $this->Form->create($product,array('type' => 'file')); ?>
  <h2>Product Registration</h2>
  <table>
    <tr>
      <th>Product Name</th>
      <td><?php echo $this->Form->input('proName',array('placeholder'=>'ex.○○○○',"required"=>false, "errors"=>true,"label"=>false)); ?></td>
    </tr>
    <tr>
      <th>Product Price</th>
      <td><?php echo $this->Form->input('proPrice',array('placeholder'=>'ex.999',"required"=>false, "errors"=>true,"label"=>false)) ?></td>
    </tr>
    <tr>
      <th>Discription</th>
      <td><?php echo $this->Form->input('proDis',array('placeholder'=>'ex.This product is good.',"required"=>false, "errors"=>true,"label"=>false)) ?></td>
    </tr>
    <tr>
      <th>Product Image</th>
      <td><?php echo $this->Form->file('imgName',["required"=>false, "errors"=>true,"label"=>false]); ?></td>
    </tr>
    <tr>
      <th>Category</th>
      <td><?php echo $this->Form->select('cateId', array("required"=>false, "errors"=>true,"label"=>false)); ?></td>
    </tr>
  </table>

  <?php echo $this->Form->submit('submit') ?>
  <?php echo $this->Form->end(); ?>

</div>
