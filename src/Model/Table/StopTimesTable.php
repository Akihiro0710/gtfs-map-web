<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * StopTimes Model
 *
 * @property \App\Model\Table\TripsTable|\Cake\ORM\Association\BelongsTo $Trips
 * @property \App\Model\Table\StopsTable|\Cake\ORM\Association\BelongsTo $Stops
 *
 * @method \App\Model\Entity\StopTime get($primaryKey, $options = [])
 * @method \App\Model\Entity\StopTime newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\StopTime[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\StopTime|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\StopTime|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\StopTime patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\StopTime[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\StopTime findOrCreate($search, callable $callback = null, $options = [])
 */
class StopTimesTable extends Table
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

        $this->setTable('stop_times');

        $this->belongsTo('Trips', [
            'foreignKey' => 'trip_id'
        ]);
        $this->belongsTo('Stops', [
            'foreignKey' => 'stop_id'
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
            ->scalar('arrival_time')
            ->maxLength('arrival_time', 255)
            ->allowEmpty('arrival_time');

        $validator
            ->scalar('departure_time')
            ->maxLength('departure_time', 255)
            ->allowEmpty('departure_time');

        $validator
            ->integer('stop_sequence')
            ->allowEmpty('stop_sequence');

        $validator
            ->scalar('stop_headsign')
            ->maxLength('stop_headsign', 255)
            ->allowEmpty('stop_headsign');

        $validator
            ->integer('pickup_type')
            ->allowEmpty('pickup_type');

        $validator
            ->integer('drop_off_type')
            ->allowEmpty('drop_off_type');

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
        $rules->add($rules->existsIn(['trip_id'], 'Trips'));
        $rules->add($rules->existsIn(['stop_id'], 'Stops'));

        return $rules;
    }
}
