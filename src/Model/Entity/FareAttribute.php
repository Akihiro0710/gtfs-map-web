<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * FareAttribute Entity
 *
 * @property string|null $fare_id
 * @property int|null $price
 * @property string|null $currency_type
 * @property int|null $payment_method
 * @property int|null $transfers
 *
 * @property \App\Model\Entity\Fare $fare
 */
class FareAttribute extends Entity
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
        'price' => true,
        'currency_type' => true,
        'payment_method' => true,
        'transfers' => true,
        'fare' => true
    ];
}
