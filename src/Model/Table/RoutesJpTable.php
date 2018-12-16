<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * RoutesJp Model
 *
 * @property \App\Model\Table\RoutesTable|\Cake\ORM\Association\BelongsTo $Routes
 *
 * @method \App\Model\Entity\RoutesJp get($primaryKey, $options = [])
 * @method \App\Model\Entity\RoutesJp newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\RoutesJp[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\RoutesJp|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\RoutesJp|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\RoutesJp patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\RoutesJp[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\RoutesJp findOrCreate($search, callable $callback = null, $options = [])
 */
class RoutesJpTable extends Table
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

        $this->setTable('routes_jp');

        $this->belongsTo('Routes', [
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
            ->scalar('route_update_date')
            ->maxLength('route_update_date', 255)
            ->allowEmpty('route_update_date');

        $validator
            ->scalar('origin_stop')
            ->maxLength('origin_stop', 255)
            ->allowEmpty('origin_stop');

        $validator
            ->scalar('via_stop')
            ->maxLength('via_stop', 255)
            ->allowEmpty('via_stop');

        $validator
            ->scalar('destination_stop')
            ->maxLength('destination_stop', 255)
            ->allowEmpty('destination_stop');

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

        return $rules;
    }
}
