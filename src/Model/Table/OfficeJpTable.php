<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * OfficeJp Model
 *
 * @property \App\Model\Table\OfficesTable|\Cake\ORM\Association\BelongsTo $Offices
 *
 * @method \App\Model\Entity\OfficeJp get($primaryKey, $options = [])
 * @method \App\Model\Entity\OfficeJp newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\OfficeJp[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\OfficeJp|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\OfficeJp|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\OfficeJp patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\OfficeJp[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\OfficeJp findOrCreate($search, callable $callback = null, $options = [])
 */
class OfficeJpTable extends Table
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

        $this->setTable('office_jp');

        $this->belongsTo('Offices', [
            'foreignKey' => 'office_id'
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
            ->integer('office_name')
            ->allowEmpty('office_name');

        $validator
            ->integer('office_phone')
            ->allowEmpty('office_phone');

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
        $rules->add($rules->existsIn(['office_id'], 'Offices'));

        return $rules;
    }
}
