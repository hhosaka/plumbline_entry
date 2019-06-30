<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Equipmentset[]|\Cake\Collection\CollectionInterface $equipmentsets
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Equipmentset'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Courses'), ['controller' => 'Courses', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Course'), ['controller' => 'Courses', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Equipment'), ['controller' => 'Equipment', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Equipment'), ['controller' => 'Equipment', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="equipmentsets index large-9 medium-8 columns content">
    <h3><?= __('Equipmentsets') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('course_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('equipment_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($equipmentsets as $equipmentset): ?>
            <tr>
                <td><?= $this->Number->format($equipmentset->id) ?></td>
                <td><?= $equipmentset->has('course') ? $this->Html->link($equipmentset->course->id, ['controller' => 'Courses', 'action' => 'view', $equipmentset->course->id]) : '' ?></td>
                <td><?= $equipmentset->has('equipment') ? $this->Html->link($equipmentset->equipment->id, ['controller' => 'Equipment', 'action' => 'view', $equipmentset->equipment->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $equipmentset->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $equipmentset->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $equipmentset->id], ['confirm' => __('Are you sure you want to delete # {0}?', $equipmentset->id)]) ?>
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
