<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * UsersCard Entity
 *
 * @property int $id
 * @property int $price
 * @property float $price_in_dolar
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 * @property bool $is_cop
 * @property bool $is_foil
 * @property int $amount
 * @property int $user_id
 * @property string $card_id
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Card $card
 */
class UsersCard extends Entity
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
        'price' => true,
        'price_in_dolar' => true,
        'created' => true,
        'modified' => true,
        'is_cop' => true,
        'is_foil' => true,
        'amount' => true,
        'user_id' => true,
        'card_id' => true,
        'user' => true,
        'card' => true
    ];
}
