<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Reservation Entity
 *
 * @property int $id
 * @property \Cake\I18n\FrozenTime $date
 * @property string $shift
 * @property int $user_id
 * @property int $vehicle_id
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Vehicle $vehicle
 */
class Reservation extends Entity
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
        'date' => true,
        'shift' => true,
        'user_id' => true,
        'vehicle_id' => true,
        'user' => true,
        'vehicle' => true
    ];
}
