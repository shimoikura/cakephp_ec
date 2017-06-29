<?php

/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('style.css') ?>
    <?= $this->Html->css('bootstrap.css') ?>
    <?= $this->Html->css('jquery.bxslider.css') ?>
    <?= $this->Html->script(array('jquery-3.2.1.js')) ?>
    <?= $this->Html->script(array('bootstrap.js')) ?>
    <?= $this->Html->script(array('buy.js')) ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>

    <!-- bx-slider setting -->
    <?= $this->Html->css('jquery.bxslider.css') ?>
    <?= $this->Html->script(array('jquery.bxslider.min.js')) ?>


</head>
<body>
  <nav class="navbar navbar-default">
    <div class="container">
      <div class="navbar-header">
        <?php echo $this->Html->image('logo1.png',['id'=>'header-top-img','class'=>'navbar-brand','url'=>'/']); ?>
      </div>


      <ul class="nav navbar-nav">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>


      </ul>
        <form class="form-inline navbar-left" id="nav-search" role="search">
          <input class="form-control mr-sm-2" type="text" placeholder="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      <ul class="nav navbar-nav navbar-right">
        <li>
            <?php
            $this->request->session();

            $arr= explode('/',$_SERVER['REQUEST_URI']);
            $link=$arr[count($arr)-1];
              if ($this->request->session()->read('userid') === null) {
                echo "<a href=" .$this->Url->build('/login?reffer='.$link, true). ">
                <center><p>
                <span class='glyphicon glyphicon-user'></span>
                </p></center>
                <p>LOGIN ";
              }
              else {
                echo "<a href=" .$this->Url->build('/logout', true). ">
                <center><p>
                <span class='glyphicon glyphicon-log-out'></span>
                </p></center>
                <p>LOGOUT ";
              }
             ?><span class="sr-only">(current)</span></p>
        </a></li>
        <li><a href="<?php echo $this->Url->build('/register', true) ?>">
          <center><p><span class="glyphicon glyphicon-info-sign"></span></p></center>
          <p>REGISTER <span class="sr-only">(current)</span></p>
        </a></li>
        <li><a href="<?php echo $this->Url->build('/cart', true) ?>">
        <center>  <p><span class="glyphicon glyphicon-shopping-cart"></span></p></center>
          <p>CART <span class="sr-only">(current)</span></p>
        </a></li>
      </ul>
  </div>
</nav>



    <?= $this->Flash->render() ?>
    <div class="container-fluid clearfix">
        <?= $this->fetch('content') ?>
    </div>
    <footer>
      <p style="text-align:center; background-color:#efefef;">copyright&copy misao</p>
    </footer>
</body>
</html>
