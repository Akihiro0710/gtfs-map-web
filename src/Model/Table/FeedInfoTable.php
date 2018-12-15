<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * FeedInfo Model
 *
 * @method \App\Model\Entity\FeedInfo get($primaryKey, $options = [])
 * @method \App\Model\Entity\FeedInfo newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\FeedInfo[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\FeedInfo|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\FeedInfo|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\FeedInfo patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\FeedInfo[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\FeedInfo findOrCreate($search, callable $callback = null, $options = [])
 */
class FeedInfoTable extends Table
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

        $this->setTable('feed_info');
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
            ->scalar('feed_publisher_name')
            ->maxLength('feed_publisher_name', 255)
            ->allowEmpty('feed_publisher_name');

        $validator
            ->scalar('feed_publisher_url')
            ->maxLength('feed_publisher_url', 255)
            ->allowEmpty('feed_publisher_url');

        $validator
            ->scalar('feed_lang')
            ->maxLength('feed_lang', 255)
            ->allowEmpty('feed_lang');

        $validator
            ->integer('feed_start_date')
            ->allowEmpty('feed_start_date');

        $validator
            ->integer('feed_end_date')
            ->allowEmpty('feed_end_date');

        $validator
            ->scalar('feed_version')
            ->maxLength('feed_version', 255)
            ->allowEmpty('feed_version');

        return $validator;
    }
}
