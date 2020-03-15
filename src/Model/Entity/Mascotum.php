<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Mascotum Entity
 *
 * @property int $masc_id
 * @property int $pers_id
 * @property string $pers_rut
 * @property int $esp_id
 * @property string $esp_nombre
 *
 * @property \App\Model\Entity\Persona $persona
 * @property \App\Model\Entity\Especie $especie
 */
class Mascotum extends Entity
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
        'pers_id' => true,
        'pers_rut' => true,
        'esp_id' => true,
        'esp_nombre' => true,
        'persona' => true,
        'especie' => true
    ];
}
