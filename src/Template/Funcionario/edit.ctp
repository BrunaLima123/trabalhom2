<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Funcionario $funcionario
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $funcionario->ID],
                ['confirm' => __('Are you sure you want to delete # {0}?', $funcionario->ID)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Funcionario'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="funcionario form large-9 medium-8 columns content">
    <?= $this->Form->create($funcionario) ?>
    <fieldset>
        <legend><?= __('Edit Funcionario') ?></legend>
        <?php
            echo $this->Form->control('NOME');
            echo $this->Form->control('CPF');
            echo $this->Form->control('DATA_NASCIMENTO', ['empty' => true]);
            echo $this->Form->control('SENHA');
            echo $this->Form->control('LOGIN');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
