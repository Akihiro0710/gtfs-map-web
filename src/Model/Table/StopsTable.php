<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Stops Model
 *
 * @property \App\Model\Table\StopsTable|\Cake\ORM\Association\BelongsTo $Stops
 * @property \App\Model\Table\ZonesTable|\Cake\ORM\Association\BelongsTo $Zones
 * @property \App\Model\Table\StopTimesTable|\Cake\ORM\Association\HasMany $StopTimes
 * @property \App\Model\Table\StopsTable|\Cake\ORM\Association\HasMany $Stops
 *
 * @method \App\Model\Entity\Stop get($primaryKey, $options = [])
 * @method \App\Model\Entity\Stop newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Stop[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Stop|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Stop|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Stop patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Stop[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Stop findOrCreate($search, callable $callback = null, $options = [])
 */
class StopsTable extends Table
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

        $this->setTable('stops');

        $this->belongsTo('Stops', [
            'foreignKey' => 'stop_id'
        ]);
        $this->belongsTo('Zones', [
            'foreignKey' => 'zone_id'
        ]);
        $this->hasMany('StopTimes', [
            'foreignKey' => 'stop_id'
        ]);
        $this->hasMany('Stops', [
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
            ->scalar('stop_name')
            ->maxLength('stop_name', 255)
            ->allowEmpty('stop_name');

        $validator
            ->scalar('stop_lat')
            ->maxLength('stop_lat', 255)
            ->allowEmpty('stop_lat');

        $validator
            ->scalar('stop_lon')
            ->maxLength('stop_lon', 255)
            ->allowEmpty('stop_lon');

        $validator
            ->integer('location_type')
            ->allowEmpty('location_type');

        $validator
            ->integer('parent_station')
            ->allowEmpty('parent_station');

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
        $rules->add($rules->existsIn(['stop_id'], 'Stops'));
        $rules->add($rules->existsIn(['zone_id'], 'Zones'));

        return $rules;
    }
}
