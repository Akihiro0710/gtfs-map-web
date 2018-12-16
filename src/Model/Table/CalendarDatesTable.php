<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * CalendarDates Model
 *
 * @property \App\Model\Table\ServicesTable|\Cake\ORM\Association\BelongsTo $Services
 *
 * @method \App\Model\Entity\CalendarDate get($primaryKey, $options = [])
 * @method \App\Model\Entity\CalendarDate newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\CalendarDate[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\CalendarDate|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CalendarDate|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CalendarDate patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\CalendarDate[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\CalendarDate findOrCreate($search, callable $callback = null, $options = [])
 */
class CalendarDatesTable extends Table
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

        $this->setTable('calendar_dates');

        $this->belongsTo('Services', [
            'foreignKey' => 'service_id'
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
            ->integer('date')
            ->allowEmpty('date');

        $validator
            ->integer('exception_type')
            ->allowEmpty('exception_type');

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
        $rules->add($rules->existsIn(['service_id'], 'Services'));

        return $rules;
    }
}
