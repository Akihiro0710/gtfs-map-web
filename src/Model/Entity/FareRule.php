<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * FareRule Entity
 *
 * @property string|null $fare_id
 * @property string|null $route_id
 * @property string|null $origin_id
 * @property string|null $destination_id
 *
 * @property \App\Model\Entity\Fare $fare
 * @property \App\Model\Entity\Route $route
 * @property \App\Model\Entity\Origin $origin
 * @property \App\Model\Entity\Destination $destination
 */
class FareRule extends Entity
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
        'fare_id' => true,
        'route_id' => true,
        'origin_id' => true,
        'destination_id' => true,
        'fare' => true,
        'route' => true,
        'origin' => true,
        'destination' => true
    ];
}
