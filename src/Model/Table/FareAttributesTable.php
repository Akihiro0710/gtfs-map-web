<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * FareAttributes Model
 *
 * @property \App\Model\Table\FaresTable|\Cake\ORM\Association\BelongsTo $Fares
 *
 * @method \App\Model\Entity\FareAttribute get($primaryKey, $options = [])
 * @method \App\Model\Entity\FareAttribute newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\FareAttribute[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\FareAttribute|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\FareAttribute|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\FareAttribute patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\FareAttribute[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\FareAttribute findOrCreate($search, callable $callback = null, $options = [])
 */
class FareAttributesTable extends Table
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

        $this->setTable('fare_attributes');

        $this->belongsTo('Fares', [
            'foreignKey' => 'fare_id'
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
            ->integer('price')
            ->allowEmpty('price');

        $validator
            ->scalar('currency_type')
            ->maxLength('currency_type', 255)
            ->allowEmpty('currency_type');

        $validator
            ->integer('payment_method')
            ->allowEmpty('payment_method');

        $validator
            ->integer('transfers')
            ->allowEmpty('transfers');

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
        $rules->add($rules->existsIn(['fare_id'], 'Fares'));

        return $rules;
    }
}
