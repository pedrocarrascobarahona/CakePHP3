<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Mascota Model
 *
 * @property \App\Model\Table\PersonaTable&\Cake\ORM\Association\BelongsTo $Persona
 * @property \App\Model\Table\EspecieTable&\Cake\ORM\Association\BelongsTo $Especie
 *
 * @method \App\Model\Entity\Mascotum get($primaryKey, $options = [])
 * @method \App\Model\Entity\Mascotum newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Mascotum[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Mascotum|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Mascotum saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Mascotum patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Mascotum[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Mascotum findOrCreate($search, callable $callback = null, $options = [])
 */
class MascotaTable extends Table
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

        $this->setTable('mascota');
        $this->setDisplayField('masc_id');
        $this->setPrimaryKey('masc_id');

        $this->belongsTo('Persona', [
            'foreignKey' => 'pers_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Especie', [
            'foreignKey' => 'esp_id',
            'joinType' => 'INNER'
        ]);
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
            ->integer('masc_id')
            ->allowEmptyString('masc_id', null, 'create');

        $validator
            ->scalar('pers_rut')
            ->maxLength('pers_rut', 10)
            ->requirePresence('pers_rut', 'create')
            ->notEmptyString('pers_rut');

        $validator
            ->scalar('esp_nombre')
            ->maxLength('esp_nombre', 50)
            ->requirePresence('esp_nombre', 'create')
            ->notEmptyString('esp_nombre');

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
        $rules->add($rules->existsIn(['pers_id'], 'Persona'));
        $rules->add($rules->existsIn(['esp_id'], 'Especie'));

        return $rules;
    }
}
