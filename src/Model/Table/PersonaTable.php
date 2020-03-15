<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Persona Model
 *
 * @method \App\Model\Entity\Persona get($primaryKey, $options = [])
 * @method \App\Model\Entity\Persona newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Persona[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Persona|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Persona saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Persona patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Persona[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Persona findOrCreate($search, callable $callback = null, $options = [])
 */
class PersonaTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('persona');
        $this->setDisplayField('pers_id');
        $this->setPrimaryKey('pers_id');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('pers_id')
            ->allowEmptyString('pers_id', null, 'create');

        $validator
            ->scalar('pers_rut')
            ->maxLength('pers_rut', 10)
            ->requirePresence('pers_rut', 'create')
            ->notEmptyString('pers_rut')
            ->add('pers_rut', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->scalar('pers_nombre')
            ->maxLength('pers_nombre', 50)
            ->requirePresence('pers_nombre', 'create')
            ->notEmptyString('pers_nombre');

        $validator
            ->scalar('pers_apellido')
            ->maxLength('pers_apellido', 50)
            ->requirePresence('pers_apellido', 'create')
            ->notEmptyString('pers_apellido');

        $validator
            ->scalar('pers_direccion')
            ->maxLength('pers_direccion', 50)
            ->requirePresence('pers_direccion', 'create')
            ->notEmptyString('pers_direccion');

        $validator
            ->scalar('pers_telefono')
            ->maxLength('pers_telefono', 8)
            ->requirePresence('pers_telefono', 'create')
            ->notEmptyString('pers_telefono');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->isUnique(['pers_rut']));

        return $rules;
    }
}
