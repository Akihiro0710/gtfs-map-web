<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * OfficeJp Entity
 *
 * @property int|null $office_id
 * @property int|null $office_name
 * @property int|null $office_phone
 *
 * @property \App\Model\Entity\Office $office
 */
class OfficeJp extends Entity
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
        'office_id' => true,
        'office_name' => true,
        'office_phone' => true,
        'office' => true
    ];
}
