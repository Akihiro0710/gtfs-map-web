<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * RoutesJp Entity
 *
 * @property string|null $route_id
 * @property string|null $route_update_date
 * @property string|null $origin_stop
 * @property string|null $via_stop
 * @property string|null $destination_stop
 *
 * @property \App\Model\Entity\Route $route
 */
class RoutesJp extends Entity
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
        'route_update_date' => true,
        'origin_stop' => true,
        'via_stop' => true,
        'destination_stop' => true,
        'route' => true
    ];
}
