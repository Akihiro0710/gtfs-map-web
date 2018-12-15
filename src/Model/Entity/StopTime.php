<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * StopTime Entity
 *
 * @property string|null $trip_id
 * @property string|null $arrival_time
 * @property string|null $departure_time
 * @property string|null $stop_id
 * @property int|null $stop_sequence
 * @property string|null $stop_headsign
 * @property int|null $pickup_type
 * @property int|null $drop_off_type
 *
 * @property \App\Model\Entity\Trip $trip
 * @property \App\Model\Entity\Stop $stop
 */
class StopTime extends Entity
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
        'trip_id' => true,
        'arrival_time' => true,
        'departure_time' => true,
        'stop_id' => true,
        'stop_sequence' => true,
        'stop_headsign' => true,
        'pickup_type' => true,
        'drop_off_type' => true,
        'trip' => true,
        'stop' => true
    ];
}
