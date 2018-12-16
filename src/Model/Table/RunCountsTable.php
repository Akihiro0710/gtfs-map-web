<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * RunCounts Model
 *
 * @method \App\Model\Entity\RunCount get($primaryKey, $options = [])
 * @method \App\Model\Entity\RunCount newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\RunCount[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\RunCount|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\RunCount|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\RunCount patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\RunCount[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\RunCount findOrCreate($search, callable $callback = null, $options = [])
 */
class RunCountsTable extends Table
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

        $this->setTable('run_counts');
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
            ->scalar('stop_id1')
            ->maxLength('stop_id1', 255)
            ->allowEmpty('stop_id1');

        $validator
            ->scalar('stop_id2')
            ->maxLength('stop_id2', 255)
            ->allowEmpty('stop_id2');

        $validator
            ->scalar('stop_name1')
            ->maxLength('stop_name1', 255)
            ->allowEmpty('stop_name1');

        $validator
            ->scalar('stop_name2')
            ->maxLength('stop_name2', 255)
            ->allowEmpty('stop_name2');

        $validator
            ->integer('run_count')
            ->allowEmpty('run_count');

        return $validator;
    }
}
