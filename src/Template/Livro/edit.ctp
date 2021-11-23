<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Livro $livro
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $livro->ID],
                ['confirm' => __('Are you sure you want to delete # {0}?', $livro->ID)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Livro'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="livro form large-9 medium-8 columns content">
    <?= $this->Form->create($livro) ?>
    <fieldset>
        <legend><?= __('Edit Livro') ?></legend>
        <?php
            echo $this->Form->control('NOME');
            echo $this->Form->control('AUTOR');
            echo $this->Form->control('GENERO');
            echo $this->Form->control('EDITORA_ID');
            echo $this->Form->control('ANO_LANCAMENTO', ['empty' => true]);
            echo $this->Form->control('CREATED', ['empty' => true]);
            echo $this->Form->control('MODIFED', ['empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
