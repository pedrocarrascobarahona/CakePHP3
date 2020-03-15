<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Persona $persona
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Persona'), ['action' => 'edit', $persona->pers_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Persona'), ['action' => 'delete', $persona->pers_id], ['confirm' => __('Are you sure you want to delete # {0}?', $persona->pers_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Persona'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Persona'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="persona view large-9 medium-8 columns content">
    <h3><?= h($persona->pers_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Pers Rut') ?></th>
            <td><?= h($persona->pers_rut) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Pers Nombre') ?></th>
            <td><?= h($persona->pers_nombre) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Pers Apellido') ?></th>
            <td><?= h($persona->pers_apellido) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Pers Direccion') ?></th>
            <td><?= h($persona->pers_direccion) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Pers Telefono') ?></th>
            <td><?= h($persona->pers_telefono) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Pers Id') ?></th>
            <td><?= $this->Number->format($persona->pers_id) ?></td>
        </tr>
    </table>
</div>
