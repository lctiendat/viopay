<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * TransactionHistory Entity
 *
 * @property int $id
 * @property string $transmitter
 * @property string $receiver
 * @property string $amount_of_money
 * @property string $content
 * @property string $ip
 * @property \Cake\I18n\FrozenTime $created
 */
class TransactionHistory extends Entity
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
        'tranding_code',true,
        'transmitter' => true,
        'receiver' => true,
        'amount_of_money' => true,
        'content' => true,
        'ip' => true,
        'created' => true,
    ];
}
