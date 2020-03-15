<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Especie $especie
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Especie'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="especie form large-9 medium-8 columns content">
    <?= $this->Form->create($especie) ?>
    <fieldset>
        <legend><?= __('Add Especie') ?></legend>
        <?php
            echo $this->Form->control('esp_nombre');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
