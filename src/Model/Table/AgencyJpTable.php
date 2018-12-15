<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * AgencyJp Model
 *
 * @property \App\Model\Table\AgenciesTable|\Cake\ORM\Association\BelongsTo $Agencies
 *
 * @method \App\Model\Entity\AgencyJp get($primaryKey, $options = [])
 * @method \App\Model\Entity\AgencyJp newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\AgencyJp[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\AgencyJp|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\AgencyJp|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\AgencyJp patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\AgencyJp[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\AgencyJp findOrCreate($search, callable $callback = null, $options = [])
 */
class AgencyJpTable extends Table
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

        $this->setTable('agency_jp');

        $this->belongsTo('Agencies', [
            'foreignKey' => 'agency_id'
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
            ->scalar('agency_official_name')
            ->maxLength('agency_official_name', 255)
            ->allowEmpty('agency_official_name');

        $validator
            ->scalar('agency_zip_number')
            ->maxLength('agency_zip_number', 255)
            ->allowEmpty('agency_zip_number');

        $validator
            ->scalar('agency_address')
            ->maxLength('agency_address', 255)
            ->allowEmpty('agency_address');

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
        $rules->add($rules->existsIn(['agency_id'], 'Agencies'));

        return $rules;
    }
}
