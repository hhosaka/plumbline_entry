<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Course Entity
 *
 * @property string $id
 * @property string $subject
 * @property string $description
 * @property int $capacity
 * @property int $period
 * @property string $status
 * @property string|null $memo
 * @property \Cake\I18n\FrozenTime $creation_date
 * @property \Cake\I18n\FrozenTime $modification_date
 *
 * @property \App\Model\Entity\Coursestaffset[] $coursestaffsets
 * @property \App\Model\Entity\Equipmentset[] $equipmentsets
 * @property \App\Model\Entity\Schedule[] $schedules
 */
class Course extends Entity
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
        'subject' => true,
        'description' => true,
        'capacity' => true,
        'period' => true,
        'status' => true,
        'memo' => true,
        'creation_date' => true,
        'modification_date' => true,
        'coursestaffsets' => true,
        'equipmentsets' => true,
        'schedules' => true
    ];
}
