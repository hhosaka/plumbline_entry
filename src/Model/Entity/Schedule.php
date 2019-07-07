<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Schedule Entity
 *
 * @property int $id
 * @property \Cake\I18n\FrozenTime $date_time
 * @property int $period
 * @property string $subject
 * @property string $course_id
 * @property string $instructor_id
 * @property string|null $assistant_id
 * @property string $status
 * @property string|null $memo
 * @property \Cake\I18n\FrozenTime $date_creation
 * @property \Cake\I18n\FrozenTime $date_modification
 *
 * @property \App\Model\Entity\Course $course
 * @property \App\Model\Entity\Memberhistory[] $memberhistories
 * @property \App\Model\Entity\Reservation[] $reservations
 */
class Schedule extends Entity
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
        'date_time' => true,
        'period' => true,
        'subject' => true,
        'course_id' => true,
        'instructor_id' => true,
        'assistant_id' => true,
        'status' => true,
        'memo' => true,
        'date_creation' => true,
        'date_modification' => true,
        // 'course' => true,
        // 'instructor' => true,
        // 'assistant' => true,
        'memberhistories' => true,
        'reservations' => true
    ];
}
