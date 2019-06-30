<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Courses Model
 *
 * @property \App\Model\Table\CoursestaffsetsTable|\Cake\ORM\Association\HasMany $Coursestaffsets
 * @property \App\Model\Table\EquipmentsetsTable|\Cake\ORM\Association\HasMany $Equipmentsets
 * @property \App\Model\Table\SchedulesTable|\Cake\ORM\Association\HasMany $Schedules
 *
 * @method \App\Model\Entity\Course get($primaryKey, $options = [])
 * @method \App\Model\Entity\Course newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Course[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Course|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Course|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Course patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Course[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Course findOrCreate($search, callable $callback = null, $options = [])
 */
class CoursesTable extends Table
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

        $this->setTable('courses');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->hasMany('Coursestaffsets', [
            'foreignKey' => 'course_id'
        ]);
        $this->hasMany('Equipmentsets', [
            'foreignKey' => 'course_id'
        ]);
        $this->hasMany('Schedules', [
            'foreignKey' => 'course_id'
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
            ->scalar('code')
            ->maxLength('code', 32)
            ->requirePresence('code', 'create')
            ->allowEmptyString('code', false);

        $validator
            ->scalar('subject')
            ->maxLength('subject', 128)
            ->requirePresence('subject', 'create')
            ->allowEmptyString('subject', false);

        $validator
            ->scalar('description')
            ->maxLength('description', 256)
            ->requirePresence('description', 'create')
            ->allowEmptyString('description', false);

        $validator
            ->integer('capacity')
            ->requirePresence('capacity', 'create')
            ->allowEmptyString('capacity', false);

        $validator
            ->integer('period')
            ->requirePresence('period', 'create')
            ->allowEmptyString('period', false);

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
