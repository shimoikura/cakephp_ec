<?php
namespace App\Model\Entity;
use Cake\ORM\Entity;
use Cake\Auth\DefaultPasswordHasher;  //暗号化するため

class Product extends Entity{
  protected $_accessible = array("*"=>true,"id"=>false);
}
 ?>
