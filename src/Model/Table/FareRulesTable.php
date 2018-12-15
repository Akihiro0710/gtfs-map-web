<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * FareRules Model
 *
 * @property \App\Model\Table\FaresTable|\Cake\ORM\Association\BelongsTo $Fares
 * @property \App\Model\Table\RoutesTable|\Cake\ORM\Association\BelongsTo $Routes
 * @property \App\Model\Table\OriginsTable|\Cake\ORM\Association\BelongsTo $Origins
 * @property \App\Model\Table\DestinationsTable|\Cake\ORM\Association\BelongsTo $Destinations
 *
 * @method \App\Model\Entity\FareRule get($primaryKey, $options = [])
 * @method \App\Model\Entity\FareRule newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\FareRule[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\FareRule|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\FareRule|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\FareRule patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\FareRule[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\FareRule findOrCreate($search, callable $callback = null, $options = [])
 */
class FareRulesTable extends Table
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

        $this->setTable('fare_rules');

        $this->belongsTo('Fares', [
            'foreignKey' => 'fare_id'
        ]);
        $this->belongsTo('Routes', [
            'foreignKey' => 'route_id'
        ]);
        $this->belongsTo('Origins', [
            'foreignKey' => 'origin_id'
        ]);
        $this->belongsTo('Destinations', [
            'foreignKey' => 'destination_id'
        ]);
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
        $rules->add($rules->existsIn(['fare_id'], 'Fares'));
        $rules->add($rules->existsIn(['route_id'], 'Routes'));
        $rules->add($rules->existsIn(['origin_id'], 'Origins'));
        $rules->add($rules->existsIn(['destination_id'], 'Destinations'));

        return $rules;
    }
}
