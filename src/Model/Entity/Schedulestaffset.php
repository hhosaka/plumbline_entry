<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Schedulestaffset Entity
 *
 * @property int $id
 * @property int $schedule_id
 * @property int $staff_id
 * @property bool $main
 *
 * @property \App\Model\Entity\Schedule $schedule
 * @property \App\Model\Entity\Staff $staff
 */
class Schedulestaffset extends Entity
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
        'staff_id' => true,
        'main' => true,
        'schedule' => true,
        'staff' => true
    ];
}
