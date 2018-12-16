<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * RunCount Entity
 *
 * @property string|null $stop_id1
 * @property string|null $stop_id2
 * @property string|null $stop_name1
 * @property string|null $stop_name2
 * @property int|null $run_count
 */
class RunCount extends Entity
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
        'stop_id1' => true,
        'stop_id2' => true,
        'stop_name1' => true,
        'stop_name2' => true,
        'run_count' => true
    ];
}
