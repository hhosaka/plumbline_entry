<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Memberhistory[]|\Cake\Collection\CollectionInterface $memberhistories
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Memberhistory'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Members'), ['controller' => 'Members', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Member'), ['controller' => 'Members', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Schedules'), ['controller' => 'Schedules', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Schedule'), ['controller' => 'Schedules', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="memberhistories index large-9 medium-8 columns content">
    <h3><?= __('Memberhistories') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('member_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('schedule_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('amount') ?></th>
                <th scope="col"><?= $this->Paginator->sort('memo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('creation_date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modification_date') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($memberhistories as $memberhistory): ?>
            <tr>
                <td><?= $this->Number->format($memberhistory->id) ?></td>
                <td><?= $memberhistory->has('member') ? $this->Html->link($memberhistory->member->id, ['controller' => 'Members', 'action' => 'view', $memberhistory->member->id]) : '' ?></td>
                <td><?= $memberhistory->has('schedule') ? $this->Html->link($memberhistory->schedule->id, ['controller' => 'Schedules', 'action' => 'view', $memberhistory->schedule->id]) : '' ?></td>
                <td><?= $this->Number->format($memberhistory->amount) ?></td>
                <td><?= h($memberhistory->memo) ?></td>
                <td><?= h($memberhistory->creation_date) ?></td>
                <td><?= h($memberhistory->modification_date) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $memberhistory->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $memberhistory->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $memberhistory->id], ['confirm' => __('Are you sure you want to delete # {0}?', $memberhistory->id)]) ?>
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
