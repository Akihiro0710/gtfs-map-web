<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Stop Entity
 *
 * @property string|null $stop_id
 * @property string|null $stop_name
 * @property string|null $stop_lat
 * @property string|null $stop_lon
 * @property string|null $zone_id
 * @property int|null $location_type
 * @property int|null $parent_station
 *
 * @property \App\Model\Entity\Stop[] $stops
 * @property \App\Model\Entity\Zone $zone
 * @property \App\Model\Entity\StopTime[] $stop_times
 */
class Stop extends Entity
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
        'stop_id' => true,
        'stop_name' => true,
        'stop_lat' => true,
        'stop_lon' => true,
        'zone_id' => true,
        'location_type' => true,
        'parent_station' => true,
        'stops' => true,
        'zone' => true,
        'stop_times' => true
    ];
}
