<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Livro Entity
 *
 * @property int $ID
 * @property string|null $NOME
 * @property string|null $AUTOR
 * @property string|null $GENERO
 * @property int|null $EDITORA_ID
 * @property \Cake\I18n\FrozenDate|null $ANO_LANCAMENTO
 * @property \Cake\I18n\FrozenTime|null $CREATED
 * @property \Cake\I18n\FrozenTime|null $MODIFED
 */
class Livro extends Entity
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
        'NOME' => true,
        'AUTOR' => true,
        'GENERO' => true,
        'EDITORA_ID' => true,
        'ANO_LANCAMENTO' => true,
        'CREATED' => true,
        'MODIFED' => true,
    ];
}
