<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Autor[]|\Cake\Collection\CollectionInterface $autor
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Autor'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="autor index large-9 medium-8 columns content">
    <h3><?= __('Autor') ?></h3>
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
            <?php foreach ($autor as $autor): ?>
            <tr>
                <td><?= $this->Number->format($autor->ID) ?></td>
                <td><?= h($autor->NOME) ?></td>
                <td><?= h($autor->RUA) ?></td>
                <td><?= h($autor->CIDADE) ?></td>
                <td><?= h($autor->UF) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $autor->ID]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $autor->ID]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $autor->ID], ['confirm' => __('Are you sure you want to delete # {0}?', $autor->ID)]) ?>
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
