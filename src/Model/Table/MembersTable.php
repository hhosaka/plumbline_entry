<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Members Model
 *
 * @property \App\Model\Table\MemberhistoriesTable|\Cake\ORM\Association\HasMany $Memberhistories
 * @property \App\Model\Table\ReservationsTable|\Cake\ORM\Association\HasMany $Reservations
 *
 * @method \App\Model\Entity\Member get($primaryKey, $options = [])
 * @method \App\Model\Entity\Member newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Member[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Member|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Member|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Member patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Member[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Member findOrCreate($search, callable $callback = null, $options = [])
 */
class MembersTable extends Table
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

        $this->setTable('members');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->hasMany('Memberhistories', [
            'foreignKey' => 'member_id'
        ]);
        $this->hasMany('Reservations', [
            'foreignKey' => 'member_id'
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
            ->integer('id')
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
            ->scalar('phone_number1')
            ->maxLength('phone_number1', 16)
            ->requirePresence('phone_number1', 'create')
            ->numeric('phone_number1','"-"(ハイフン)等を入れずに数字のみ入力してください')
            ->allowEmptyString('phone_number1', false);

        $validator
            ->scalar('phone_number2')
            ->maxLength('phone_number2', 16)
            ->numeric('phone_number2','"-"(ハイフン)等を入れずに数字のみ入力してください')
            ->allowEmptyString('phone_number2');

        $validator
            ->scalar('sex')
            ->requirePresence('sex', 'create')
            ->allowEmptyString('sex', false);

        $validator
            ->date('birthday')
            ->requirePresence('birthday', 'create')
            ->allowEmptyDate('birthday', false);

        $validator
            ->scalar('zip_code')
            ->maxLength('zip_code', 16)
            ->numeric('zip_code','"-"(ハイフン)等を入れずに数字のみ入力してください')
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
            ->scalar('email1')
            ->maxLength('email1', 256)
            ->requirePresence('email1', 'create')
            ->allowEmptyString('email1', false)
            ->email('email1','メールアドレスの形式で入力してください');

        $validator
            ->scalar('email2')
            ->maxLength('email2', 256)
            ->allowEmptyString('email2')
            ->email('email2','メールアドレスの形式で入力してください');

        $validator
            ->scalar('password')
            ->minLength('password', 6)
            ->maxLength('password', 16)
            ->allowEmptyString('password');

        $validator
            ->scalar('status');

        $validator
            ->scalar('memo')
            ->maxLength('memo', 1024)
            ->allowEmptyString('memo');

        $validator
            ->dateTime('creation_date');

        $validator
            ->dateTime('modification_date');

        return $validator;
    }
}
