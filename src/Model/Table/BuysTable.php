<?php
namespace App\Model\Table; //既にあるファンクションを使うための定義
use Cake\ORM\Table;
use Cake\ORM\Query;
use Cake\Validation\Validator;

class ClassName extends AnotherClass
{

  public function initialize(array $config)
  {
    parent::initialize($config);
    $this->setTable("buys");
    $this->setDisplayField("id");
    $this->setPrimaryKey("id");

    $this->addBehavior("Timestamp"); //get curently time
  }

  public function validationDefault(Validator $validator){
    $validator
          ->integer("id")
          ->allowEmpty("id","create");
    $validator
          ->requirePresence('userId',"create")
          ->notEmpty('userId');
    $validator
          ->requirePresence('orderId',"create")
          ->notEmpty('orderId');
    $validator
          ->requirePresence('name',"create")
          ->notEmpty('name');
    $validator
          ->requirePresence('price',"create")
          ->notEmpty('price');
    $validator
          ->requirePresence('quantity',"create")
          ->notEmpty('quantity');
    $validator
          ->requirePresence('total',"create")
          ->notEmpty('total');
    $validator
          ->requirePresence('statement',"create")
          ->notEmpty('statement');
  }
}


 ?>
