<div class="container">
  <div class="row">
    <h2>Cutomer Profile</h2>
    <div class="col-md-7">
      <table style="width:80%;">
        <tr>
          <th style="font-size:18px">Name</th>
          <th><?php echo $dushboard->name; ?></th>
        </tr>
        <tr>
          <td>Role</td>
          <td><?php echo $dushboard->role ?></td>
        </tr>
        <tr>
          <td>Email</td>
          <td><?php echo $dushboard->email; ?></td>
        </tr>
        <tr>
          <td>Phone</td>
          <td><?php echo $dushboard->phone; ?></td>
        </tr>
        <tr>
          <td>Country</td>
          <td><?php echo $dushboard->country ?></td>
        </tr>
        <tr>
          <td>City</td>
          <td><?php echo $dushboard->city ?></td>
        </tr>
        <tr>
          <td>Date of Birth</td>
          <td><?php echo $dushboard->year."/".$dushboard->month."/".$dushboard->day; ?></td>
        </tr>
      </table>
    </div>

    <div class="col-md-5">
      <ul>
        <li><?php echo $this->Html->link('Edit',['action'=>'custoedit']) ?></li>
        <li><?php echo $this->Html->link('Personal Information',['action'=>'personal']) ?></li>
        <li><?php echo $this->Html->link('Order history',['action'=>'history']) ?></li>
      </ul>
    </div>

  </div>
</div>
