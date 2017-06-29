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
          ->requirePresence("name","create")
          ->notEmpty("name");
    $validator
          ->requirePresence("phone","create")
          ->notEmpty("phone")
          ->lengthBetween("phone",[10,10],"please enter only 10 digit");
    $validator
          ->requirePresence("address","create")
          ->notEmpty("address");
    $validator
          ->requirePresence("email","create")
          ->notEmpty("email");
    $validator
          ->requirePresence("delivery","create")
          ->notEmpty("delivery");
    $validator
          ->requirePresence("payment","create")
          ->notEmpty("payment");
    $validator
          ->requirePresence("gift","create")
          ->notEmpty("gift");
    return $validator;
  }

  public function buildRules(RulesChecker $rules){
    $rules->add($rules->isUnique(array("email")));
    return $rules;
  }
}

 ?>
