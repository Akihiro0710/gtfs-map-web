<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Agency Entity
 *
 * @property int|null $agency_id
 * @property string|null $agency_name
 * @property string|null $agency_url
 * @property string|null $agency_timezone
 * @property string|null $agency_lang
 *
 * @property \App\Model\Entity\Agency[] $agency
 * @property \App\Model\Entity\AgencyJp[] $agency_jp
 * @property \App\Model\Entity\Route[] $routes
 */
class Agency extends Entity
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
        'agency_id' => true,
        'agency_name' => true,
        'agency_url' => true,
        'agency_timezone' => true,
        'agency_lang' => true,
        'agency' => true,
        'agency_jp' => true,
        'routes' => true
    ];
}
