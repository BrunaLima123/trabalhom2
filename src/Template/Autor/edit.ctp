<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Autor $autor
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $autor->ID],
                ['confirm' => __('Are you sure you want to delete # {0}?', $autor->ID)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Autor'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="autor form large-9 medium-8 columns content">
    <?= $this->Form->create($autor) ?>
    <fieldset>
        <legend><?= __('Edit Autor') ?></legend>
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
