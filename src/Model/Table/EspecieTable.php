<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Especie Model
 *
 * @method \App\Model\Entity\Especie get($primaryKey, $options = [])
 * @method \App\Model\Entity\Especie newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Especie[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Especie|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Especie saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Especie patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Especie[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Especie findOrCreate($search, callable $callback = null, $options = [])
 */
class EspecieTable extends Table
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

        $this->setTable('especie');
        $this->setDisplayField('esp_id');
        $this->setPrimaryKey('esp_id');
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
            ->integer('esp_id')
            ->allowEmptyString('esp_id', null, 'create');

        $validator
            ->scalar('esp_nombre')
            ->maxLength('esp_nombre', 50)
            ->requirePresence('esp_nombre', 'create')
            ->notEmptyString('esp_nombre')
            ->add('esp_nombre', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

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
        $rules->add($rules->isUnique(['esp_nombre']));

        return $rules;
    }
}
