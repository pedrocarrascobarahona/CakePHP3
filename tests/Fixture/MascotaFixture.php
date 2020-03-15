<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * MascotaFixture
 */
class MascotaFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'mascota';
    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'masc_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'pers_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'pers_rut' => ['type' => 'string', 'length' => 10, 'null' => false, 'default' => null, 'collate' => 'utf8mb4_spanish2_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'esp_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'esp_nombre' => ['type' => 'string', 'length' => 50, 'null' => false, 'default' => null, 'collate' => 'utf8mb4_spanish2_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        '_indexes' => [
            'pers_id' => ['type' => 'index', 'columns' => ['pers_id'], 'length' => []],
            'esp_id' => ['type' => 'index', 'columns' => ['esp_id'], 'length' => []],
            'pers_rut' => ['type' => 'index', 'columns' => ['pers_rut'], 'length' => []],
            'esp_nombre' => ['type' => 'index', 'columns' => ['esp_nombre'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['masc_id'], 'length' => []],
            'mascota_ibfk_1' => ['type' => 'foreign', 'columns' => ['esp_id'], 'references' => ['especie', 'esp_id'], 'update' => 'cascade', 'delete' => 'restrict', 'length' => []],
            'mascota_ibfk_2' => ['type' => 'foreign', 'columns' => ['pers_id'], 'references' => ['persona', 'pers_id'], 'update' => 'cascade', 'delete' => 'restrict', 'length' => []],
            'mascota_ibfk_3' => ['type' => 'foreign', 'columns' => ['pers_rut'], 'references' => ['persona', 'pers_rut'], 'update' => 'cascade', 'delete' => 'restrict', 'length' => []],
            'mascota_ibfk_4' => ['type' => 'foreign', 'columns' => ['esp_nombre'], 'references' => ['especie', 'esp_nombre'], 'update' => 'cascade', 'delete' => 'restrict', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8mb4_spanish2_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd
    /**
     * Init method
     *
     * @return void
     */
    public function init()
    {
        $this->records = [
            [
                'masc_id' => 1,
                'pers_id' => 1,
                'pers_rut' => 'Lorem ip',
                'esp_id' => 1,
                'esp_nombre' => 'Lorem ipsum dolor sit amet'
            ],
        ];
        parent::init();
    }
}
