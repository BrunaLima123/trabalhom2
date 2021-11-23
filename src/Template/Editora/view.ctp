<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Editora $editora
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Editora'), ['action' => 'edit', $editora->ID]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Editora'), ['action' => 'delete', $editora->ID], ['confirm' => __('Are you sure you want to delete # {0}?', $editora->ID)]) ?> </li>
        <li><?= $this->Html->link(__('List Editora'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Editora'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="editora view large-9 medium-8 columns content">
    <h3><?= h($editora->ID) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('NOME') ?></th>
            <td><?= h($editora->NOME) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('RUA') ?></th>
            <td><?= h($editora->RUA) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('CIDADE') ?></th>
            <td><?= h($editora->CIDADE) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('UF') ?></th>
            <td><?= h($editora->UF) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('ID') ?></th>
            <td><?= $this->Number->format($editora->ID) ?></td>
        </tr>
    </table>
</div>
