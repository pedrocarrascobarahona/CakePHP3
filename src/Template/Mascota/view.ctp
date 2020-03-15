<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Mascotum $mascotum
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Mascotum'), ['action' => 'edit', $mascotum->masc_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Mascotum'), ['action' => 'delete', $mascotum->masc_id], ['confirm' => __('Are you sure you want to delete # {0}?', $mascotum->masc_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Mascota'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Mascotum'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Persona'), ['controller' => 'Persona', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Persona'), ['controller' => 'Persona', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Especie'), ['controller' => 'Especie', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Especie'), ['controller' => 'Especie', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="mascota view large-9 medium-8 columns content">
    <h3><?= h($mascotum->masc_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Persona') ?></th>
            <td><?= $mascotum->has('persona') ? $this->Html->link($mascotum->persona->pers_id, ['controller' => 'Persona', 'action' => 'view', $mascotum->persona->pers_id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Pers Rut') ?></th>
            <td><?= h($mascotum->pers_rut) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Especie') ?></th>
            <td><?= $mascotum->has('especie') ? $this->Html->link($mascotum->especie->esp_id, ['controller' => 'Especie', 'action' => 'view', $mascotum->especie->esp_id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Esp Nombre') ?></th>
            <td><?= h($mascotum->esp_nombre) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Masc Id') ?></th>
            <td><?= $this->Number->format($mascotum->masc_id) ?></td>
        </tr>
    </table>
</div>
