<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Memberhistory $memberhistory
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Memberhistory'), ['action' => 'edit', $memberhistory->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Memberhistory'), ['action' => 'delete', $memberhistory->id], ['confirm' => __('Are you sure you want to delete # {0}?', $memberhistory->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Memberhistories'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Memberhistory'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Members'), ['controller' => 'Members', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Member'), ['controller' => 'Members', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Schedules'), ['controller' => 'Schedules', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Schedule'), ['controller' => 'Schedules', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="memberhistories view large-9 medium-8 columns content">
    <h3><?= h($memberhistory->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Member') ?></th>
            <td><?= $memberhistory->has('member') ? $this->Html->link($memberhistory->member->id, ['controller' => 'Members', 'action' => 'view', $memberhistory->member->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Schedule') ?></th>
            <td><?= $memberhistory->has('schedule') ? $this->Html->link($memberhistory->schedule->id, ['controller' => 'Schedules', 'action' => 'view', $memberhistory->schedule->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Memo') ?></th>
            <td><?= h($memberhistory->memo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($memberhistory->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Amount') ?></th>
            <td><?= $this->Number->format($memberhistory->amount) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Creation Date') ?></th>
            <td><?= h($memberhistory->creation_date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modification Date') ?></th>
            <td><?= h($memberhistory->modification_date) ?></td>
        </tr>
    </table>
</div>
