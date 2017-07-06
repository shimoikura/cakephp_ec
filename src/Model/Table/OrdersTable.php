<?php
namespace App\Model\Table;
use Cake\ORM\Table;
use Cake\ORM\Query;
use Cake\Validation\Validator;

class ClassName extends AnotherClass
{

  public function initialize(array $config){
    parent:initialize($config);
    $this->setTable('orders');
    $this->setDisplayField('id');
    $this->setPrimaryKey('id');
    $this->addBehavior('Timestamp');
  }

  public function validationDefault(Validator $validator){
    $validator
          ->integer("id");
          ->allowEmpty('id','create');
    $validator
          ->requirePresence('first_name',"create")
          ->notEmpty('first_name');
    $validator
          ->requirePresence('last_name',"create")
          ->notEmpty('last_name');
    $validator
          ->requirePresence('email',"create")
          ->notEmpty('email');
    $validator
          ->requirePresence('phone',"create")
          ->notEmpty('phone');
    $validator
          ->requirePresence('billing_address',"create")
          ->notEmpty('billing_address');
    $validator
          ->requirePresence('billing_address2',"create")
          ->notEmpty('billing_address2');
    $validator
          ->requirePresence('shipping_city',"create")
          ->notEmpty('shipping_city');
    $validator
          ->requirePresence('shipping_zip',"create")
          ->notEmpty('shipping_zip');
    $validator
          ->requirePresence('subtotal',"create")
          ->notEmpty('subtotal');
    $validator
          ->requirePresence('total',"create")
          ->notEmpty('total');
    $validator
          ->requirePresence('transaction',"create")
          ->notEmpty('transaction');
    $validator
          ->requirePresence('status',"create")
          ->notEmpty('status');
    return $validator;      
  }
}

 ?>
