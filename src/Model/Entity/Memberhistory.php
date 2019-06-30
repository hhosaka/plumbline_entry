<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Memberhistory Entity
 *
 * @property int $id
 * @property int $member_id
 * @property int|null $schedule_id
 * @property int $amount
 * @property string|null $memo
 * @property \Cake\I18n\FrozenTime $creation_date
 * @property \Cake\I18n\FrozenTime $modification_date
 *
 * @property \App\Model\Entity\Member $member
 * @property \App\Model\Entity\Schedule $schedule
 */
class Memberhistory extends Entity
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
        'member_id' => true,
        'schedule_id' => true,
        'amount' => true,
        'memo' => true,
        'creation_date' => true,
        'modification_date' => true,
        'member' => true,
        'schedule' => true
    ];
}
