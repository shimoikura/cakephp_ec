<?php
  echo $this->Form->create($dushboard);
?>
<div class="container-fluid">
  <div class="row">
    <div class="col-md-4">
      <?php
        echo $this->Form->input('name');
        echo $this->Form->input('email',['type'=>'text']);
        echo $this->Form->input('phone');
        echo $this->Form->input('city');
        echo $this->Form->input('country');
        $years = range(1900,2017);
        $months = range(1,12);
        $days = range(1,31);
        echo $this->Form->select('year',$years,array('default'=>$dushboard->year));
        echo $this->Form->select('month',$months,array('default'=>$dushboard->month));
        echo $this->Form->select('day',$days,array('default'=>$dushboard->day));

        echo $this->Form->button('submit');
      ?>
    </div>

    <div class="col-md-4">
    </div>
  </div>
</div>
<?php  echo $this->Form->end(); ?>
