<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Member Entity
 *
 * @property int $id
 * @property string $family_name
 * @property string $first_name
 * @property string $family_name_kana
 * @property string $first_name_kana
 * @property string $phone_number1
 * @property string|null $phone_number2
 * @property string $sex
 * @property \Cake\I18n\FrozenDate $birthday
 * @property string $zip_code
 * @property string $prefecture
 * @property string $address1
 * @property string|null $address2
 * @property string $email1
 * @property string|null $email2
 * @property string $password
 * @property string $status
 * @property string|null $memo
 * @property \Cake\I18n\FrozenTime $creation_date
 * @property \Cake\I18n\FrozenTime $modification_date
 *
 * @property \App\Model\Entity\Memberhistory[] $memberhistories
 * @property \App\Model\Entity\Reservation[] $reservations
 */
class Member extends Entity
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
        'family_name' => true,
        'first_name' => true,
        'family_name_kana' => true,
        'first_name_kana' => true,
        'phone_number1' => true,
        'phone_number2' => true,
        'sex' => true,
        'birthday' => true,
        'zip_code' => true,
        'prefecture' => true,
        'address1' => true,
        'address2' => true,
        'email1' => true,
        'email2' => true,
        'password' => true,
        'status' => true,
        'memo' => true,
        'creation_date' => true,
        'modification_date' => true,
        'memberhistories' => true,
        'reservations' => true
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'password'
    ];
}
