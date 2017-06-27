<?php
namespace App\Model\Table;
use Cake\ORM\Table;
use Cake\ORM\Query;
use Cake\Validation\Validator;
use Cake\ORM\RulesChecker;

class ProductsTable extends Table
{
  public Function initialize(array $config)
  {
    parent::initialize($config);
    $this->setTable("products");
    $this->setDisplayField("id");
    $this->setPrimarykey("id");
  }
  public function validationDefault(Validator $validator){
    $validator
          ->integer("id")
          ->allowEmpty("id","create");
    $validator
          ->requirePresence("proName","create")
          ->notEmpty("proName","Please enter the name");
    $validator
          ->requirePresence("proPrice","create")
          ->notEmpty("proPrice");
    $validator
          ->requirePresence("proDis","create")
          ->notEmpty("proDis");
    $validator
          ->requirePresence("imgName","create")
          ->notEmpty("imgName");
    $validator
          ->requirePresence("cateId","create")
          ->notEmpty("cateId");
    return $validator;
  }
}

 ?>
