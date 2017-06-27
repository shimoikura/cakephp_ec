<?php
  // echo $this->Html->image('1497852726_1_mm_nature_photography.jpg',['id'=>'img-a']);
  foreach ($products as $value) {
    echo "<h2>".$value->proName."</h2>";
    echo $this->Html->image($value->imgName,['id'=>'img-a']);
    echo "<br>";
  }

 ?>
