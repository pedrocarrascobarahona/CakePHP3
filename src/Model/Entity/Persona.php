<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Persona Entity
 *
 * @property int $pers_id
 * @property string $pers_rut
 * @property string $pers_nombre
 * @property string $pers_apellido
 * @property string $pers_direccion
 * @property string $pers_telefono
 */
class Persona extends Entity
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
        'pers_rut' => true,
        'pers_nombre' => true,
        'pers_apellido' => true,
        'pers_direccion' => true,
        'pers_telefono' => true
    ];
}
