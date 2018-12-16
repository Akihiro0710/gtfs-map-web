<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Routes Model
 *
 * @property \App\Model\Table\RoutesTable|\Cake\ORM\Association\BelongsTo $Routes
 * @property \App\Model\Table\AgenciesTable|\Cake\ORM\Association\BelongsTo $Agencies
 * @property \App\Model\Table\JpParentRoutesTable|\Cake\ORM\Association\BelongsTo $JpParentRoutes
 * @property \App\Model\Table\FareRulesTable|\Cake\ORM\Association\HasMany $FareRules
 * @property \App\Model\Table\RoutesTable|\Cake\ORM\Association\HasMany $Routes
 * @property \App\Model\Table\RoutesJpTable|\Cake\ORM\Association\HasMany $RoutesJp
 * @property \App\Model\Table\TripsTable|\Cake\ORM\Association\HasMany $Trips
 *
 * @method \App\Model\Entity\Route get($primaryKey, $options = [])
 * @method \App\Model\Entity\Route newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Route[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Route|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Route|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Route patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Route[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Route findOrCreate($search, callable $callback = null, $options = [])
 */
class RoutesTable extends Table
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

        $this->setTable('routes');

        $this->belongsTo('Routes', [
            'foreignKey' => 'route_id'
        ]);
        $this->belongsTo('Agencies', [
            'foreignKey' => 'agency_id'
        ]);
        $this->belongsTo('JpParentRoutes', [
            'foreignKey' => 'jp_parent_route_id'
        ]);
        $this->hasMany('FareRules', [
            'foreignKey' => 'route_id'
        ]);
        $this->hasMany('Routes', [
            'foreignKey' => 'route_id'
        ]);
        $this->hasMany('RoutesJp', [
            'foreignKey' => 'route_id'
        ]);
        $this->hasMany('Trips', [
            'foreignKey' => 'route_id'
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
            ->scalar('route_short_name')
            ->maxLength('route_short_name', 255)
            ->allowEmpty('route_short_name');

        $validator
            ->scalar('route_long_name')
            ->maxLength('route_long_name', 255)
            ->allowEmpty('route_long_name');

        $validator
            ->scalar('route_desc')
            ->maxLength('route_desc', 255)
            ->allowEmpty('route_desc');

        $validator
            ->integer('route_type')
            ->allowEmpty('route_type');

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
        $rules->add($rules->existsIn(['agency_id'], 'Agencies'));
        $rules->add($rules->existsIn(['jp_parent_route_id'], 'JpParentRoutes'));

        return $rules;
    }
}
