<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Route Entity
 *
 * @property string|null $route_id
 * @property int|null $agency_id
 * @property string|null $route_short_name
 * @property string|null $route_long_name
 * @property string|null $route_desc
 * @property int|null $route_type
 * @property string|null $jp_parent_route_id
 *
 * @property \App\Model\Entity\Route[] $routes
 * @property \App\Model\Entity\Agency $agency
 * @property \App\Model\Entity\JpParentRoute $jp_parent_route
 * @property \App\Model\Entity\FareRule[] $fare_rules
 * @property \App\Model\Entity\RoutesJp[] $routes_jp
 * @property \App\Model\Entity\Trip[] $trips
 */
class Route extends Entity
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
        'agency_id' => true,
        'route_short_name' => true,
        'route_long_name' => true,
        'route_desc' => true,
        'route_type' => true,
        'jp_parent_route_id' => true,
        'routes' => true,
        'agency' => true,
        'jp_parent_route' => true,
        'fare_rules' => true,
        'routes_jp' => true,
        'trips' => true
    ];
}
