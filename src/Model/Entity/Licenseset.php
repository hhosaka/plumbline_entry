<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Licenseset Entity
 *
 * @property int $id
 * @property int $staff_id
 * @property int $license_id
 *
 * @property \App\Model\Entity\Staff $staff
 * @property \App\Model\Entity\License $license
 */
class Licenseset extends Entity
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
        'staff_id' => true,
        'license_id' => true,
        'staff' => true,
        'license' => true
    ];
}
