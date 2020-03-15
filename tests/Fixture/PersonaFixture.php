<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * PersonaFixture
 */
class PersonaFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'persona';
    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'pers_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'pers_rut' => ['type' => 'string', 'length' => 10, 'null' => false, 'default' => null, 'collate' => 'utf8mb4_spanish2_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'pers_nombre' => ['type' => 'string', 'length' => 50, 'null' => false, 'default' => null, 'collate' => 'utf8mb4_spanish2_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'pers_apellido' => ['type' => 'string', 'length' => 50, 'null' => false, 'default' => null, 'collate' => 'utf8mb4_spanish2_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'pers_direccion' => ['type' => 'string', 'length' => 50, 'null' => false, 'default' => null, 'collate' => 'utf8mb4_spanish2_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'pers_telefono' => ['type' => 'string', 'length' => 8, 'null' => false, 'default' => null, 'collate' => 'utf8mb4_spanish2_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['pers_id'], 'length' => []],
            'pers_rut' => ['type' => 'unique', 'columns' => ['pers_rut'], 'length' => []],
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
                'pers_id' => 1,
                'pers_rut' => 'Lorem ip',
                'pers_nombre' => 'Lorem ipsum dolor sit amet',
                'pers_apellido' => 'Lorem ipsum dolor sit amet',
                'pers_direccion' => 'Lorem ipsum dolor sit amet',
                'pers_telefono' => 'Lorem '
            ],
        ];
        parent::init();
    }
}
