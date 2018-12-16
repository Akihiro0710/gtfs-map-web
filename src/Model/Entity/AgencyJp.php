<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * AgencyJp Entity
 *
 * @property int|null $agency_id
 * @property string|null $agency_official_name
 * @property string|null $agency_zip_number
 * @property string|null $agency_address
 *
 * @property \App\Model\Entity\Agency $agency
 */
class AgencyJp extends Entity
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
        'agency_official_name' => true,
        'agency_zip_number' => true,
        'agency_address' => true,
        'agency' => true
    ];
}
