<?php
namespace App\Model\Table; //既にあるファンクションを使うための定義
use Cake\ORM\Table;
use Cake\ORM\Query;
use Cake\Validation\Validator;
use Cake\ORM\RulesChecker;

  class UsersTable extends Table{
    public function initialize(array $config){
      parent::initialize($config);
      $this->setTable("users");
      $this->setDisplayField("id");
      $this->setPrimaryKey("id");
    }

    public function validationDefault(Validator $validator){
      $validator
            ->integer("id")
            ->allowEmpty("id","create");
      $validator
            ->requirePresence("name","create")
            ->notEmpty("name");
            // ->custom("name",[a-zA-Z]);
      $validator
            ->requirePresence("email","create")
            ->notEmpty("email");
      $validator
            ->requirePresence("password","create")
            ->notEmpty("password")
            ->alphaNumeric("password")
            ->lengthBetween("password",[6,12],"please enter only 8 to 12 digit");
      $validator
            ->requirePresence("phone","create")
            ->notEmpty("phone")
            ->lengthBetween("phone",[10,10],"please enter only 10 digit");
      $validator
            ->requirePresence("city","create")
            ->notEmpty("city");
      $validator
            ->requirePresence("country","create")
            ->notEmpty("country");
      // $validator
      //       ->requirePresence("year","create")
      //       ->notEmpty("year");
      // $validator
      //       ->requirePresence("month","create")
      //       ->notEmpty("month");
      // $validator
      //       ->requirePresence("day","create")
      //       ->notEmpty("day");
        return $validator;
    }

    public function buildRules(RulesChecker $rules){
      $rules->add($rules->isUnique(array("email")));
      return $rules;
    }
  }
 ?>
