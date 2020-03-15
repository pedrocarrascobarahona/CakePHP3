<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Especie $especie
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Especie'), ['action' => 'edit', $especie->esp_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Especie'), ['action' => 'delete', $especie->esp_id], ['confirm' => __('Are you sure you want to delete # {0}?', $especie->esp_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Especie'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Especie'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="especie view large-9 medium-8 columns content">
    <h3><?= h($especie->esp_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Esp Nombre') ?></th>
            <td><?= h($especie->esp_nombre) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Esp Id') ?></th>
            <td><?= $this->Number->format($especie->esp_id) ?></td>
        </tr>
    </table>
</div>
