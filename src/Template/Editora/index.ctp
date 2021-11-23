<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Editora[]|\Cake\Collection\CollectionInterface $editora
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Editora'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="editora index large-9 medium-8 columns content">
    <h3><?= __('Editora') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('ID') ?></th>
                <th scope="col"><?= $this->Paginator->sort('NOME') ?></th>
                <th scope="col"><?= $this->Paginator->sort('RUA') ?></th>
                <th scope="col"><?= $this->Paginator->sort('CIDADE') ?></th>
                <th scope="col"><?= $this->Paginator->sort('UF') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($editora as $editora): ?>
            <tr>
                <td><?= $this->Number->format($editora->ID) ?></td>
                <td><?= h($editora->NOME) ?></td>
                <td><?= h($editora->RUA) ?></td>
                <td><?= h($editora->CIDADE) ?></td>
                <td><?= h($editora->UF) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $editora->ID]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $editora->ID]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $editora->ID], ['confirm' => __('Are you sure you want to delete # {0}?', $editora->ID)]) ?>
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
