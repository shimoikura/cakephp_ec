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

          <?php
          foreach ($products as $value) {
            ?>
          <?php echo $this->Form->create(null,['url'=>['controller'=>'products','action'=>'addcart']]); ?>
          <div class="row">
            <div class="col-md-2">
              <h4><?php echo $value->proName; ?></h4>
            <?php
            echo "<div class='pro-img-box'>";
            $pro_link = $this->Html->image($value->imgName,['class'=>'pro-img img-responsive']);

            echo $this->Html->link($pro_link,array('controller'=>'Products','action'=>'page',$value->id),array('escape'=>false));
            echo "</div>";
            echo "<p>Price: ".$value->proPrice."</p>";

            echo $this->Form->input('Id',['type'=>'hidden','value'=>$value->id]);
            echo $this->Form->input('itemId',['type'=>'hidden','value'=>$value->id]);
            $this->request->session();
            echo $this->Form->input('itemName',['type'=>'hidden','value'=>$value->proName]);
            echo $this->Form->input('itemPrice',['type'=>'hidden','value'=>$value->proPrice]);
            echo $this->Form->input('itemImg',['type'=>'hidden','value'=>$value->imgName]);
            echo $this->Form->input('quantity',['type'=>'hidden','value'=>1]);
            echo $this->Form->input('totalPrice',['type'=>'hidden','value'=>$value->proPrice]);

            echo $this->Form->button('ADD TO CART',['type'=>'submit','name'=>'btn-addcart']);
          ?>
          <?php echo $this->Form->end(); ?>
            </div>
            <?php } ?>
          </div>

</div>
