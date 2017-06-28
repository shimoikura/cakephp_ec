<div class="container">
  <div class="row">
  <!-- top-img-box -->
    <div class="row top-img-box">
      <ul class="bxslider" style="z-index:0;">
        <li><?php echo $this->Html->Image("mv_1.jpg",['class'=>'bxslider-img']); ?></li>
        <li><?php echo $this->Html->Image("mv_2.jpg",['class'=>'bxslider-img']); ?></li>
      </ul>
    </div>
  </div>
    <!-- Top Page Slider Setting -->
    <script type="text/javascript">
    $(document).ready(function(){
      $('.bxslider').bxSlider({
        controls: false,
        auto: true,
        speed: 1000,
      });
    });
    </script>
    <div class="row">


        <!-- nav-bar -->
          <nav class="navbar nav-cate">
            <ul class="nav navbar-nav">
              <li class="active nav-item" id="0">All</li>
              <li class="nav-item">Shoes</li>
              <li class="nav-item">Shoes</li>
              <li class="nav-item">Shoes</li>
            </ul>
          </nav>

          <!-- <div class="row">
            <div class="col-md-3">
              <div class="pro-img-box">
                <?php echo $this->Html->image('1497852726_1_mm_nature_photography.jpg',['class'=>'img-responsive']); ?>
              </div>
            </div>

            <div class="col-md-3">
              <div class="pro-img-box">
                <?php echo $this->Html->image('1497951414_Wedges._V530666625_.jpg',['class'=>'img-responsive']); ?>
              </div>
            </div>
          </div> -->
          <?php
          foreach ($products as $value) {
            ?>
          <div class="row">
            <div class="col-md-2">
              <h4><?php echo $value->proName; ?></h4>
            <?php
            echo "<div class='pro-img-box'>";
            $pro_link = $this->Html->image($value->imgName,['class'=>'pro-img img-responsive']);

            echo $this->Html->link($pro_link,array('controller'=>'Products','action'=>'page',$value->id),array('escape'=>false));
            echo "</div>";
            echo "<p>Price: ".$value->proPrice."</p>";
            // echo $this->Html->link('ADD TO CART',['controller'=>'products','action'=>'addcart'],['class'=>'btn btn-primary']);

            echo "<button class='btn btn-primary' type='button'>Add to Cart</button>";

          ?>
            </div>
            <?php } ?>
          </div>

</div>
