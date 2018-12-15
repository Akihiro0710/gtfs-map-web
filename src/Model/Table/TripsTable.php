<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Trips Model
 *
 * @property \App\Model\Table\RoutesTable|\Cake\ORM\Association\BelongsTo $Routes
 * @property \App\Model\Table\ServicesTable|\Cake\ORM\Association\BelongsTo $Services
 * @property \App\Model\Table\TripsTable|\Cake\ORM\Association\BelongsTo $Trips
 * @property \App\Model\Table\BlocksTable|\Cake\ORM\Association\BelongsTo $Blocks
 * @property \App\Model\Table\ShapesTable|\Cake\ORM\Association\BelongsTo $Shapes
 * @property \App\Model\Table\StopTimesTable|\Cake\ORM\Association\HasMany $StopTimes
 * @property \App\Model\Table\TripsTable|\Cake\ORM\Association\HasMany $Trips
 *
 * @method \App\Model\Entity\Trip get($primaryKey, $options = [])
 * @method \App\Model\Entity\Trip newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Trip[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Trip|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Trip|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Trip patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Trip[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Trip findOrCreate($search, callable $callback = null, $options = [])
 */
class TripsTable extends Table
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

        $this->setTable('trips');

        $this->belongsTo('Routes', [
            'foreignKey' => 'route_id'
        ]);
        $this->belongsTo('Services', [
            'foreignKey' => 'service_id'
        ]);
        $this->belongsTo('Trips', [
            'foreignKey' => 'trip_id'
        ]);
        $this->belongsTo('Blocks', [
            'foreignKey' => 'block_id'
        ]);
        $this->belongsTo('Shapes', [
            'foreignKey' => 'shape_id'
        ]);
        $this->hasMany('StopTimes', [
            'foreignKey' => 'trip_id'
        ]);
        $this->hasMany('Trips', [
            'foreignKey' => 'trip_id'
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
            ->scalar('trip_headsign')
            ->maxLength('trip_headsign', 255)
            ->allowEmpty('trip_headsign');

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
        $rules->add($rules->existsIn(['route_id'], 'Routes'));
        $rules->add($rules->existsIn(['service_id'], 'Services'));
        $rules->add($rules->existsIn(['trip_id'], 'Trips'));
        $rules->add($rules->existsIn(['block_id'], 'Blocks'));
        $rules->add($rules->existsIn(['shape_id'], 'Shapes'));

        return $rules;
    }
}
