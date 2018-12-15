<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * CalendarDate Entity
 *
 * @property string|null $service_id
 * @property int|null $date
 * @property int|null $exception_type
 *
 * @property \App\Model\Entity\Service $service
 */
class CalendarDate extends Entity
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
        'date' => true,
        'exception_type' => true,
        'service' => true
    ];
}
