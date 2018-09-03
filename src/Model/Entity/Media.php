<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Media Entity
 *
 * @property int $m_id
 * @property string $path
 * @property \Cake\I18n\FrozenTime $created
 * @property string $flag1
 * @property string $flag2
 * @property string $flag3
 */
class Media extends Entity
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
        'path' => true,
        'created' => true,
        'flag1' => true,
        'flag2' => true,
        'flag3' => true
    ];
}
