<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Oferta Entity
 *
 * @property int $id
 * @property int $materia_id
 * @property int $periodo_id
 * @property string $estatus
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Materia $materia
 * @property \App\Model\Entity\Periodo $periodo
 */
class Oferta extends Entity
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
        'materia_id' => true,
        'periodo_id' => true,
        'estatus' => true,
        'created' => true,
        'modified' => true,
        'materia' => true,
        'periodo' => true
    ];
}
