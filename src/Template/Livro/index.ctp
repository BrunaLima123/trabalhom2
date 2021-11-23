<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Livro[]|\Cake\Collection\CollectionInterface $livro
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Livro'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="livro index large-9 medium-8 columns content">
    <h3><?= __('Livro') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('ID') ?></th>
                <th scope="col"><?= $this->Paginator->sort('NOME') ?></th>
                <th scope="col"><?= $this->Paginator->sort('AUTOR') ?></th>
                <th scope="col"><?= $this->Paginator->sort('GENERO') ?></th>
                <th scope="col"><?= $this->Paginator->sort('EDITORA_ID') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ANO_LANCAMENTO') ?></th>
                <th scope="col"><?= $this->Paginator->sort('CREATED') ?></th>
                <th scope="col"><?= $this->Paginator->sort('MODIFED') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($livro as $livro): ?>
            <tr>
                <td><?= $this->Number->format($livro->ID) ?></td>
                <td><?= h($livro->NOME) ?></td>
                <td><?= h($livro->AUTOR) ?></td>
                <td><?= h($livro->GENERO) ?></td>
                <td><?= $this->Number->format($livro->EDITORA_ID) ?></td>
                <td><?= h($livro->ANO_LANCAMENTO) ?></td>
                <td><?= h($livro->CREATED) ?></td>
                <td><?= h($livro->MODIFED) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $livro->ID]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $livro->ID]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $livro->ID], ['confirm' => __('Are you sure you want to delete # {0}?', $livro->ID)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
