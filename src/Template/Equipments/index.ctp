<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Equipment[]|\Cake\Collection\CollectionInterface $equipments
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Equipment'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Equipmentsets'), ['controller' => 'Equipmentsets', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Equipmentset'), ['controller' => 'Equipmentsets', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="equipments index large-9 medium-8 columns content">
    <h3><?= __('Equipments') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('description') ?></th>
                <th scope="col"><?= $this->Paginator->sort('memo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('creation_date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modification_date') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($equipments as $equipment): ?>
            <tr>
                <td><?= $this->Number->format($equipment->id) ?></td>
                <td><?= h($equipment->Name) ?></td>
                <td><?= h($equipment->description) ?></td>
                <td><?= h($equipment->memo) ?></td>
                <td><?= h($equipment->creation_date) ?></td>
                <td><?= h($equipment->modification_date) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $equipment->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $equipment->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $equipment->id], ['confirm' => __('Are you sure you want to delete # {0}?', $equipment->id)]) ?>
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
