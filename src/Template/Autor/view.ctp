<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Autor $autor
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Autor'), ['action' => 'edit', $autor->ID]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Autor'), ['action' => 'delete', $autor->ID], ['confirm' => __('Are you sure you want to delete # {0}?', $autor->ID)]) ?> </li>
        <li><?= $this->Html->link(__('List Autor'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Autor'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="autor view large-9 medium-8 columns content">
    <h3><?= h($autor->ID) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('NOME') ?></th>
            <td><?= h($autor->NOME) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('RUA') ?></th>
            <td><?= h($autor->RUA) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('CIDADE') ?></th>
            <td><?= h($autor->CIDADE) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('UF') ?></th>
            <td><?= h($autor->UF) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('ID') ?></th>
            <td><?= $this->Number->format($autor->ID) ?></td>
        </tr>
    </table>
</div>
