<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Trip Entity
 *
 * @property string|null $route_id
 * @property string|null $service_id
 * @property string|null $trip_id
 * @property string|null $trip_headsign
 * @property string|null $block_id
 * @property string|null $shape_id
 *
 * @property \App\Model\Entity\Route $route
 * @property \App\Model\Entity\Service $service
 * @property \App\Model\Entity\Trip[] $trips
 * @property \App\Model\Entity\Block $block
 * @property \App\Model\Entity\Shape $shape
 * @property \App\Model\Entity\StopTime[] $stop_times
 */
class Trip extends Entity
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
        'route_id' => true,
        'service_id' => true,
        'trip_id' => true,
        'trip_headsign' => true,
        'block_id' => true,
        'shape_id' => true,
        'route' => true,
        'service' => true,
        'trips' => true,
        'block' => true,
        'shape' => true,
        'stop_times' => true
    ];
}
