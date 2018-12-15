<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * FeedInfo Entity
 *
 * @property string|null $feed_publisher_name
 * @property string|null $feed_publisher_url
 * @property string|null $feed_lang
 * @property int|null $feed_start_date
 * @property int|null $feed_end_date
 * @property string|null $feed_version
 */
class FeedInfo extends Entity
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
        'feed_publisher_name' => true,
        'feed_publisher_url' => true,
        'feed_lang' => true,
        'feed_start_date' => true,
        'feed_end_date' => true,
        'feed_version' => true
    ];
}
