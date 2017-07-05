<?php
namespace App\Model\Table; //既にあるファンクションを使うための定義
use Cake\ORM\Table;
use Cake\ORM\Query;
use Cake\Validation\Validator;
use Cake\ORM\RulesChecker;


class ShipsTable extends Table{
  public function initialize(array $config){
    parent::initialize($config);
    $this->setTable("ships");
    $this->setDisplayField("id");
    $this->setPrimaryKey("id");
  }

  public function validationDefault(Validator $validator){
    $validator
          ->integer("id")
          ->allowEmpty("id","create");
    $validator
          ->requirePresence("userId","create")
          ->notEmpty("userId");
    $validator
          ->requirePresence("first_name","create")
          ->notEmpty("first_name");
    $validator
          ->requirePresence("last_name","create")
          ->notEmpty("last_name");
    $validator
          ->requirePresence("phone","create")
          ->notEmpty("phone")
          ->lengthBetween("phone",[10,10],"please enter only 10 digit");
    $validator
          ->requirePresence("email","create")
          ->notEmpty("email");
    $validator
          ->requirePresence("billing_address","create")
          ->notEmpty("billing_address");
    $validator
          ->requirePresence("billing_address2","create")
          ->notEmpty("billing_address2");
    $validator
          ->requirePresence("billing_city","create")
          ->notEmpty("billing_city");
    $validator
          ->requirePresence("billing_state","create")
          ->notEmpty("billing_state");
    $validator
          ->requirePresence("billing_zip","create")
          ->notEmpty("billing_zip");
    $validator
          ->requirePresence("billing_country","create")
          ->notEmpty("billing_country");
    $validator
          ->requirePresence("shipping_address","create")
          ->notEmpty("shipping_address");
    $validator
          ->requirePresence("shipping_address2","create")
          ->notEmpty("shipping_address2");
    $validator
          ->requirePresence("shipping_city","create")
          ->notEmpty("shipping_city");
    $validator
          ->requirePresence("shipping_state","create")
          ->notEmpty("shipping_state");
    $validator
          ->requirePresence("shipping_zip","create")
          ->notEmpty("shipping_zip");
    $validator
          ->requirePresence("shipping_country","create")
          ->notEmpty("shipping_country");
    // $validator
    //       ->requirePresence("delivery","create")
    //       ->notEmpty("delivery");
    // $validator
    //       ->requirePresence("payment","create")
    //       ->notEmpty("payment");
    // $validator
    //       ->requirePresence("gift","create")
    //       ->notEmpty("gift");
    return $validator;
  }

  public function buildRules(RulesChecker $rules){
    $rules->add($rules->isUnique(array("email")));
    return $rules;
  }
}

 ?>
