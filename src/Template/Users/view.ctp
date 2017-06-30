<div class="conteiner">
  <h2>User</h2>
  <table border="1" style="width:80%;">
    <tr>
      <td>id</td>
      <td><?php echo $view->id ?></td>
    </tr>
    <tr>
      <td>Role</td>
      <td><?php echo $view->role ?></td>
    </tr>
    <tr>
      <td>Username</td>
      <td><?php echo $view->name ?></td>
    </tr>
    <tr>
      <td>Password</td>
      <td><?php echo $view->password ?></td>
    </tr>
    <tr>
      <td>Email</td>
      <td><?php echo $view->email ?></td>
    </tr>
    <tr>
      <td>Phone</td>
      <td><?php echo $view->phone ?></td>
    </tr>
    <tr>
      <td>City</td>
      <td><?php echo $view->city ?></td>
    </tr>
    <tr>
      <td>Country</td>
      <td><?php echo $view->country ?></td>
    </tr>
    <tr>
      <td>Date of Birth</td>
      <td><?php echo $view->day."/".$view->month."/".$view->year ?></td>
    </tr>
  </table>
</div>
