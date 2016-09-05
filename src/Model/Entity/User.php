<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;
use Cake\Log\LogTrait;
use Cake\Auth\DefaultPasswordHasher;

/**
 * User Entity
 *
 * @property int $id

 * @property string $uname
 * @property string $emailid
 * @property string $password
 * @property string $confirm
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified

 */
class User extends Entity
{

    use LogTrait;
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
        '*' => true,
        'id' => false
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'password'
    ];
    protected function _setPassword($value)
    {
        $hasher = new DefaultPasswordHasher();
        return $hasher->hash($value);
    }
}
