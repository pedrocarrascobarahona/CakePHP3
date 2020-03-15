<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Mascotum $mascotum
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $mascotum->masc_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $mascotum->masc_id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Mascota'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Persona'), ['controller' => 'Persona', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Persona'), ['controller' => 'Persona', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Especie'), ['controller' => 'Especie', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Especie'), ['controller' => 'Especie', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="mascota form large-9 medium-8 columns content">
    <?= $this->Form->create($mascotum) ?>
    <fieldset>
        <legend><?= __('Edit Mascotum') ?></legend>
        <?php
            echo $this->Form->control('pers_id', ['options' => $persona]);
            echo $this->Form->control('pers_rut');
            echo $this->Form->control('esp_id', ['options' => $especie]);
            echo $this->Form->control('esp_nombre');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
