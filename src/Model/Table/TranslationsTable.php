<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Translations Model
 *
 * @property \App\Model\Table\TransTable|\Cake\ORM\Association\BelongsTo $Trans
 *
 * @method \App\Model\Entity\Translation get($primaryKey, $options = [])
 * @method \App\Model\Entity\Translation newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Translation[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Translation|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Translation|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Translation patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Translation[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Translation findOrCreate($search, callable $callback = null, $options = [])
 */
class TranslationsTable extends Table
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

        $this->setTable('translations');

        $this->belongsTo('Trans', [
            'foreignKey' => 'trans_id'
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
            ->scalar('lang')
            ->maxLength('lang', 255)
            ->allowEmpty('lang');

        $validator
            ->scalar('translation')
            ->maxLength('translation', 255)
            ->allowEmpty('translation');

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
        $rules->add($rules->existsIn(['trans_id'], 'Trans'));

        return $rules;
    }
}
