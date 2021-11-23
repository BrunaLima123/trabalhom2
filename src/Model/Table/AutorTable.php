<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Autor Model
 *
 * @method \App\Model\Entity\Autor get($primaryKey, $options = [])
 * @method \App\Model\Entity\Autor newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Autor[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Autor|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Autor saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Autor patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Autor[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Autor findOrCreate($search, callable $callback = null, $options = [])
 */
class AutorTable extends Table
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

        $this->setTable('autor');
        $this->setDisplayField('ID');
        $this->setPrimaryKey('ID');
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
            ->integer('ID')
            ->allowEmptyString('ID', null, 'create');

        $validator
            ->scalar('NOME')
            ->maxLength('NOME', 100)
            ->allowEmptyString('NOME');

        $validator
            ->scalar('RUA')
            ->maxLength('RUA', 100)
            ->allowEmptyString('RUA');

        $validator
            ->scalar('CIDADE')
            ->maxLength('CIDADE', 100)
            ->allowEmptyString('CIDADE');

        $validator
            ->scalar('UF')
            ->maxLength('UF', 2)
            ->allowEmptyString('UF');

        return $validator;
    }
}
