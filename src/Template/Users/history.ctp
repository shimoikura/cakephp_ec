<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h2>Order</h2>
      <table style="width:100%; text-align:center;">
        <tr style="border-top:2px solid #efefef;">
          <th style='text-align:center'>Name</th>
          <th style='text-align:center'>Price</th>
          <th style='text-align:center'>Quantity</th>
          <th style='text-align:center'>Total</th>
          <th style='text-align:center'>Delivery Status</th>
          <th style='text-align:center'>Order Date</th>
          <th style='text-align:center'>Received Date</th>
        </tr>
        <?php foreach ($orders as $value) { ?>
        <tr style="border-top:2px solid #efefef;hegiht:30px;">
          <td><?php echo $value['name']; ?></td>
          <td><?php echo $value['price']; ?></td>
          <td><?php echo $value['quantity']; ?></td>
          <td><?php echo $value['total']; ?></td>
          <td><?php echo $value['statement']; ?></td>
          <td><?php echo $value['orderDate']; ?></td>
          <td><?php echo $value['receviedDate']; ?></td>
        </tr>
        <?php } ?>
      </table>
    </div>
  </div>
</div>
