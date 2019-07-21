<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Reservation Entity
 *
 * @property int $id
 * @property int $schedule_id
 * @property int $customer_id
 * @property int $instructor_id
 * @property string $receiving_method
 * @property string $charge_method
 * @property string $status
 * @property string|null $memo
 * @property \Cake\I18n\FrozenTime $creation_date
 * @property \Cake\I18n\FrozenTime $modification_date
 *
 * @property \App\Model\Entity\Schedule $schedule
 * @property \App\Model\Entity\User $customer
 * @property \App\Model\Entity\User $instructor
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
        'schedule_id' => true,
        'customer_id' => true,
        'instructor_id' => true,
        'receiving_method' => true,
        'charge_method' => true,
        'status' => true,
        'memo' => true,
        'creation_date' => true,
        'modification_date' => true,
        'schedule' => true,
        'customer' => true,
        'instructor' => true
    ];
}
