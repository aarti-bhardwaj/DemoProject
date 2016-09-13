<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * UserFriends Model
 *
 * @method \App\Model\Entity\UserFriend get($primaryKey, $options = [])
 * @method \App\Model\Entity\UserFriend newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\UserFriend[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\UserFriend|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\UserFriend patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\UserFriend[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\UserFriend findOrCreate($search, callable $callback = null)
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class UserFriendsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->table('user_friends');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Friend1', ['className' => 'Users','foreignKey' => 'friend1' , 'propertyName' => 'users']);

        $this->belongsTo('Friend2', ['className' => 'Users','foreignKey' => 'friend2' , 'propertyName' => 'users']);

    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->integer('friend1')
            ->requirePresence('friend1', 'create')
            ->notEmpty('friend1');

        $validator
            ->integer('friend2')
            ->requirePresence('friend2', 'create')
            ->notEmpty('friend2');

        $validator
            ->boolean('status')
            ->requirePresence('status', 'create')
            ->notEmpty('status');

        return $validator;
    }
}
