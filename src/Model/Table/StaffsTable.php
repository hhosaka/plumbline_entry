<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Staffs Model
 *
 * @property \App\Model\Table\ReservationsTable|\Cake\ORM\Association\HasMany $Reservations
 *
 * @method \App\Model\Entity\Staff get($primaryKey, $options = [])
 * @method \App\Model\Entity\Staff newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Staff[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Staff|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Staff|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Staff patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Staff[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Staff findOrCreate($search, callable $callback = null, $options = [])
 */
class StaffsTable extends Table
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

        $this->setTable('staffs');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->hasMany('Reservations', [
            'foreignKey' => 'staff_id'
        ]);
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
            ->scalar('id')
            ->maxLength('id', 16)
            ->allowEmptyString('id', 'create');

        $validator
            ->scalar('family_name')
            ->maxLength('family_name', 128)
            ->requirePresence('family_name', 'create')
            ->allowEmptyString('family_name', false);

        $validator
            ->scalar('first_name')
            ->maxLength('first_name', 128)
            ->requirePresence('first_name', 'create')
            ->allowEmptyString('first_name', false);

        $validator
            ->scalar('family_name_kana')
            ->maxLength('family_name_kana', 128)
            ->requirePresence('family_name_kana', 'create')
            ->allowEmptyString('family_name_kana', false);

        $validator
            ->scalar('first_name_kana')
            ->maxLength('first_name_kana', 128)
            ->requirePresence('first_name_kana', 'create')
            ->allowEmptyString('first_name_kana', false);

        $validator
            ->scalar('sex')
            ->requirePresence('sex', 'create')
            ->allowEmptyString('sex', false);

        $validator
            ->date('birthday')
            ->requirePresence('birthday', 'create')
            ->allowEmptyDate('birthday', false);

        $validator
            ->scalar('phone_number1')
            ->maxLength('phone_number1', 16)
            ->requirePresence('phone_number1', 'create')
            ->allowEmptyString('phone_number1', false);

        $validator
            ->scalar('phone_number2')
            ->maxLength('phone_number2', 16)
            ->allowEmptyString('phone_number2');

        $validator
            ->scalar('email1')
            ->maxLength('email1', 256)
            ->requirePresence('email1', 'create')
            ->allowEmptyString('email1', false);

        $validator
            ->scalar('email2')
            ->maxLength('email2', 256)
            ->allowEmptyString('email2');

        $validator
            ->scalar('zip_code')
            ->maxLength('zip_code', 16)
            ->requirePresence('zip_code', 'create')
            ->allowEmptyString('zip_code', false);

        $validator
            ->scalar('prefecture')
            ->maxLength('prefecture', 16)
            ->requirePresence('prefecture', 'create')
            ->allowEmptyString('prefecture', false);

        $validator
            ->scalar('address1')
            ->maxLength('address1', 256)
            ->requirePresence('address1', 'create')
            ->allowEmptyString('address1', false);

        $validator
            ->scalar('address2')
            ->maxLength('address2', 256)
            ->allowEmptyString('address2');

        $validator
            ->scalar('status')
            ->requirePresence('status', 'create')
            ->allowEmptyString('status', false);

        $validator
            ->scalar('memo')
            ->maxLength('memo', 1024)
            ->allowEmptyString('memo');

        $validator
            ->dateTime('creation_date')
            ->requirePresence('creation_date', 'create')
            ->allowEmptyDateTime('creation_date', false);

        $validator
            ->dateTime('modification_date')
            ->requirePresence('modification_date', 'create')
            ->allowEmptyDateTime('modification_date', false);

        return $validator;
    }
}
