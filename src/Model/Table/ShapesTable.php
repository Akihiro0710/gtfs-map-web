<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Shapes Model
 *
 * @property \App\Model\Table\ShapesTable|\Cake\ORM\Association\BelongsTo $Shapes
 * @property \App\Model\Table\ShapesTable|\Cake\ORM\Association\HasMany $Shapes
 * @property \App\Model\Table\TripsTable|\Cake\ORM\Association\HasMany $Trips
 *
 * @method \App\Model\Entity\Shape get($primaryKey, $options = [])
 * @method \App\Model\Entity\Shape newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Shape[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Shape|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Shape|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Shape patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Shape[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Shape findOrCreate($search, callable $callback = null, $options = [])
 */
class ShapesTable extends Table
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

        $this->setTable('shapes');

        $this->belongsTo('Shapes', [
            'foreignKey' => 'shape_id'
        ]);
        $this->hasMany('Shapes', [
            'foreignKey' => 'shape_id'
        ]);
        $this->hasMany('Trips', [
            'foreignKey' => 'shape_id'
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
            ->scalar('shape_pt_lat')
            ->maxLength('shape_pt_lat', 255)
            ->allowEmpty('shape_pt_lat');

        $validator
            ->scalar('shape_pt_lon')
            ->maxLength('shape_pt_lon', 255)
            ->allowEmpty('shape_pt_lon');

        $validator
            ->integer('shape_pt_sequence')
            ->allowEmpty('shape_pt_sequence');

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
        $rules->add($rules->existsIn(['shape_id'], 'Shapes'));

        return $rules;
    }
}
