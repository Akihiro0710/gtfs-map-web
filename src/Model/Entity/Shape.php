<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Shape Entity
 *
 * @property string|null $shape_id
 * @property string|null $shape_pt_lat
 * @property string|null $shape_pt_lon
 * @property int|null $shape_pt_sequence
 *
 * @property \App\Model\Entity\Shape[] $shapes
 * @property \App\Model\Entity\Trip[] $trips
 */
class Shape extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'shape_id' => true,
        'shape_pt_lat' => true,
        'shape_pt_lon' => true,
        'shape_pt_sequence' => true,
        'shapes' => true,
        'trips' => true
    ];
}
