<?php
namespace App\Model\Table;
use CakeORM\Table;
use Cake\ORM\Query;
use Cake\Validation\Validator;

  class CartsTable extends Table{
    public function initialize(array $config){
      parent::initialize($config);
      $this->setTable("carts");
      $this->setDisplayField("Id");
      $this->setPrimaryKey("Id");
    }

    public function validationDefault(Validator $validator){
      $validator
            ->integer("Id");
            ->allowEmpty("Id","create");
      $validator
            ->requirePresence("itemId","create");
            ->notEmpty("itemId");
      $validator
            ->requirePresence("userId","create");
            ->notEmpty("userId");
      $validator
            ->requirePresence("itemName","create");
            ->notEmpty("itemName");
      $validator
            ->requirePresence("itemPrice","create");
            ->notEmpty("itemPrice");
      $validator
            ->requirePresence("itemImg","create");
            ->notEmpty("itemImg");
      $validator
            ->requirePresence("quantity","create");
            ->notEmpty("quantity");
      $validator
            ->requirePresence("totalPrice","create");
            ->notEmpty("totalPrice");
      return $validator;
    }
  }
 ?>
