<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Schedules Model
 *
 * @property \App\Model\Table\UsersTable|\Cake\ORM\Association\BelongsTo $Instructors
 * @property \App\Model\Table\UsersTable|\Cake\ORM\Association\BelongsTo $Assistants
 * @property \App\Model\Table\ReservationsTable|\Cake\ORM\Association\HasMany $Reservations
 *
 * @method \App\Model\Entity\Schedule get($primaryKey, $options = [])
 * @method \App\Model\Entity\Schedule newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Schedule[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Schedule|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Schedule|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Schedule patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Schedule[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Schedule findOrCreate($search, callable $callback = null, $options = [])
 */
class SchedulesTable extends Table
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

        $this->setTable('schedules');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Instructors', [
            'foreignKey' => 'instructor_id',
            'className' => 'Users',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Assistants', [
            'className' => 'Users',
            'foreignKey' => 'assistant_id'
        ]);
        $this->hasMany('Reservations', [
            'foreignKey' => 'schedule_id'
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
            ->dateTime('date_time')
            ->requirePresence('date_time', 'create')
            ->allowEmptyDateTime('date_time', false);

        $validator
            ->integer('period')
            ->requirePresence('period', 'create')
            ->allowEmptyString('period', false);

        $validator
            ->scalar('subject')
            ->maxLength('subject', 128)
            ->requirePresence('subject', 'create')
            ->allowEmptyString('subject', false);

        $validator
            ->scalar('status')
            ->requirePresence('status', 'create')
            ->allowEmptyString('status', false);

        $validator
            ->scalar('memo')
            ->maxLength('memo', 1024)
            ->allowEmptyString('memo');

        $validator
            ->dateTime('date_creation')
            ->requirePresence('date_creation', 'create')
            ->allowEmptyDateTime('date_creation', false);

        $validator
            ->dateTime('date_modification')
            ->requirePresence('date_modification', 'create')
            ->allowEmptyDateTime('date_modification', false);

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['instructor_id'], 'Instructors'));
        $rules->add($rules->existsIn(['assistant_id'], 'Assistants'));

        return $rules;
    }
}
