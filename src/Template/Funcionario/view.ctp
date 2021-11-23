<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Funcionario $funcionario
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Funcionario'), ['action' => 'edit', $funcionario->ID]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Funcionario'), ['action' => 'delete', $funcionario->ID], ['confirm' => __('Are you sure you want to delete # {0}?', $funcionario->ID)]) ?> </li>
        <li><?= $this->Html->link(__('List Funcionario'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Funcionario'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="funcionario view large-9 medium-8 columns content">
    <h3><?= h($funcionario->ID) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('NOME') ?></th>
            <td><?= h($funcionario->NOME) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('CPF') ?></th>
            <td><?= h($funcionario->CPF) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('SENHA') ?></th>
            <td><?= h($funcionario->SENHA) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('LOGIN') ?></th>
            <td><?= h($funcionario->LOGIN) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('ID') ?></th>
            <td><?= $this->Number->format($funcionario->ID) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('DATA NASCIMENTO') ?></th>
            <td><?= h($funcionario->DATA_NASCIMENTO) ?></td>
        </tr>
    </table>
</div>
