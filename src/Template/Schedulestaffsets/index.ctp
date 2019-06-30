<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Schedulestaffset[]|\Cake\Collection\CollectionInterface $schedulestaffsets
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Schedulestaffset'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Schedules'), ['controller' => 'Schedules', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Schedule'), ['controller' => 'Schedules', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Staffs'), ['controller' => 'Staffs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Staff'), ['controller' => 'Staffs', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="schedulestaffsets index large-9 medium-8 columns content">
    <h3><?= __('Schedulestaffsets') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('schedule_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('staff_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('main') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($schedulestaffsets as $schedulestaffset): ?>
            <tr>
                <td><?= $this->Number->format($schedulestaffset->id) ?></td>
                <td><?= $schedulestaffset->has('schedule') ? $this->Html->link($schedulestaffset->schedule->id, ['controller' => 'Schedules', 'action' => 'view', $schedulestaffset->schedule->id]) : '' ?></td>
                <td><?= $schedulestaffset->has('staff') ? $this->Html->link($schedulestaffset->staff->id, ['controller' => 'Staffs', 'action' => 'view', $schedulestaffset->staff->id]) : '' ?></td>
                <td><?= h($schedulestaffset->main) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $schedulestaffset->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $schedulestaffset->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $schedulestaffset->id], ['confirm' => __('Are you sure you want to delete # {0}?', $schedulestaffset->id)]) ?>
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
