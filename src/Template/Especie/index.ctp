<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Especie[]|\Cake\Collection\CollectionInterface $especie
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Acciones') ?></li>
        <li><?= $this->Html->link(__('Nueva Especie'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="especie index large-9 medium-8 columns content">
    <h3><?= __('Especie') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('especie id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('especie nombre') ?></th>
                <th scope="col" class="actions"><?= __('Acciones') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($especie as $especie): ?>
            <tr>
                <td><?= $this->Number->format($especie->esp_id) ?></td>
                <td><?= h($especie->esp_nombre) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $especie->esp_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $especie->esp_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $especie->esp_id], ['confirm' => __('Are you sure you want to delete # {0}?', $especie->esp_id)]) ?>
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
