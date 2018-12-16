<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Calendar Entity
 *
 * @property string|null $service_id
 * @property int|null $monday
 * @property int|null $tuesday
 * @property int|null $wednesday
 * @property int|null $thursday
 * @property int|null $friday
 * @property int|null $saturday
 * @property int|null $sunday
 * @property int|null $start_date
 * @property int|null $end_date
 *
 * @property \App\Model\Entity\Service $service
 */
class Calendar extends Entity
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
        'service_id' => true,
        'monday' => true,
        'tuesday' => true,
        'wednesday' => true,
        'thursday' => true,
        'friday' => true,
        'saturday' => true,
        'sunday' => true,
        'start_date' => true,
        'end_date' => true,
        'service' => true
    ];
}
