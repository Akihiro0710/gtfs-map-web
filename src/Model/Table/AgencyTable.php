<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Agency Model
 *
 * @property \App\Model\Table\AgenciesTable|\Cake\ORM\Association\BelongsTo $Agencies
 * @property \App\Model\Table\AgencyTable|\Cake\ORM\Association\HasMany $Agency
 * @property \App\Model\Table\AgencyJpTable|\Cake\ORM\Association\HasMany $AgencyJp
 * @property \App\Model\Table\RoutesTable|\Cake\ORM\Association\HasMany $Routes
 *
 * @method \App\Model\Entity\Agency get($primaryKey, $options = [])
 * @method \App\Model\Entity\Agency newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Agency[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Agency|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Agency|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Agency patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Agency[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Agency findOrCreate($search, callable $callback = null, $options = [])
 */
class AgencyTable extends Table
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

        $this->setTable('agency');

        $this->belongsTo('Agencies', [
            'foreignKey' => 'agency_id'
        ]);
        $this->hasMany('Agency', [
            'foreignKey' => 'agency_id'
        ]);
        $this->hasMany('AgencyJp', [
            'foreignKey' => 'agency_id'
        ]);
        $this->hasMany('Routes', [
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
            ->scalar('agency_name')
            ->maxLength('agency_name', 255)
            ->allowEmpty('agency_name');

        $validator
            ->scalar('agency_url')
            ->maxLength('agency_url', 255)
            ->allowEmpty('agency_url');

        $validator
            ->scalar('agency_timezone')
            ->maxLength('agency_timezone', 255)
            ->allowEmpty('agency_timezone');

        $validator
            ->scalar('agency_lang')
            ->maxLength('agency_lang', 255)
            ->allowEmpty('agency_lang');

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
