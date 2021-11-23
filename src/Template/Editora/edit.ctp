<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Editora $editora
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $editora->ID],
                ['confirm' => __('Are you sure you want to delete # {0}?', $editora->ID)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Editora'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="editora form large-9 medium-8 columns content">
    <?= $this->Form->create($editora) ?>
    <fieldset>
        <legend><?= __('Edit Editora') ?></legend>
        <?php
            echo $this->Form->control('NOME');
            echo $this->Form->control('RUA');
            echo $this->Form->control('CIDADE');
            echo $this->Form->control('UF');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
