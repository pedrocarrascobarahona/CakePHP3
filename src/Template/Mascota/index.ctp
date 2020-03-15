<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Mascotum[]|\Cake\Collection\CollectionInterface $mascota
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Acciones') ?></li>
        <li><?= $this->Html->link(__('Nueva Mascota'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Listar Persona'), ['controller' => 'Persona', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Nueva Persona'), ['controller' => 'Persona', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Listar Especie'), ['controller' => 'Especie', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Nueva Especie'), ['controller' => 'Especie', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="mascota index large-9 medium-8 columns content">
    <h3><?= __('Mascota') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('mascota id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('persona id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('persona rut') ?></th>
                <th scope="col"><?= $this->Paginator->sort('especie id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('especie nombre') ?></th>
                <th scope="col" class="actions"><?= __('Acciones') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($mascota as $mascotum): ?>
            <tr>
                <td><?= $this->Number->format($mascotum->masc_id) ?></td>
                <td><?= $mascotum->has('persona') ? $this->Html->link($mascotum->persona->pers_id, ['controller' => 'Persona', 'action' => 'view', $mascotum->persona->pers_id]) : '' ?></td>
                <td><?= h($mascotum->pers_rut) ?></td>
                <td><?= $mascotum->has('especie') ? $this->Html->link($mascotum->especie->esp_id, ['controller' => 'Especie', 'action' => 'view', $mascotum->especie->esp_id]) : '' ?></td>
                <td><?= h($mascotum->esp_nombre) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $mascotum->masc_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $mascotum->masc_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $mascotum->masc_id], ['confirm' => __('Are you sure you want to delete # {0}?', $mascotum->masc_id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
