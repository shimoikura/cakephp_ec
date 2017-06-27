<table>
  <tr>
    <th rowspan="2">Id</th>
    <th rowspan="2">Name</th>
    <th rowspan="2">email</th>
    <th rowspan="2">phone</th>
    <th rowspan="2">city</th>
    <th rowspan="2">country</th>
    <th colspan="3">Date of Birth</th>
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
      <td><?php echo $value->email ?></td>
      <td><?php echo $value->phone ?></td>
      <td><?php echo $value->city ?></td>
      <td><?php echo $value->country ?></td>
      <td><?php echo $value->year ?></td>
      <td><?php echo $value->month ?></td>
      <td><?php echo $value->day ?></td>

    </tr>
  <?php } ?>
</table>
