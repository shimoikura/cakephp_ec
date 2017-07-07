<div class="conteiner">
  <div class="row users-box">
    <h2>Users</h2>
    <table border="1" style="width:80%;">
      <tr>
        <th rowspan="2">Id</th>
        <th rowspan="2">Name</th>
        <th rowspan="2">Role</th>
        <th rowspan="2">email</th>
        <th rowspan="2">phone</th>
        <th rowspan="2">city</th>
        <th rowspan="2">country</th>
        <th colspan="3">Date of Birth</th>
        <th rowspan="2">Action</th>
      </tr>
      <tr>
        <th>Day</th>
        <th>Month</th>
        <th>Year</th>
      </tr>
      <?php foreach ($users as $value){ ?>
        <tr>
          <td><?php echo $value->id ?></td>
          <td><?php echo $value->name ?></td>
          <td><?php echo $value->role ?></td>
          <td><?php echo $value->email ?></td>
          <td><?php echo $value->phone ?></td>
          <td><?php echo $value->city ?></td>
          <td><?php echo $value->country ?></td>
          <td><?php echo $value->year ?></td>
          <td><?php echo $value->month ?></td>
          <td><?php echo $value->day ?></td>
          <td><?php echo $this->Html->link('View ',array('controller'=>'Users','action'=>'view',$value->id)); ?>
            <?php echo $this->Html->link('Edit',array('controller'=>'Users','action'=>'edit',$value->id)); ?>
          </td>
        </tr>
      <?php } ?>
    </table>
  </div>
</div>
