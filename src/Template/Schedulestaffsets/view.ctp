<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Schedulestaffset $schedulestaffset
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Schedulestaffset'), ['action' => 'edit', $schedulestaffset->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Schedulestaffset'), ['action' => 'delete', $schedulestaffset->id], ['confirm' => __('Are you sure you want to delete # {0}?', $schedulestaffset->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Schedulestaffsets'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Schedulestaffset'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Schedules'), ['controller' => 'Schedules', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Schedule'), ['controller' => 'Schedules', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Staffs'), ['controller' => 'Staffs', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Staff'), ['controller' => 'Staffs', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="schedulestaffsets view large-9 medium-8 columns content">
    <h3><?= h($schedulestaffset->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Schedule') ?></th>
            <td><?= $schedulestaffset->has('schedule') ? $this->Html->link($schedulestaffset->schedule->id, ['controller' => 'Schedules', 'action' => 'view', $schedulestaffset->schedule->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Staff') ?></th>
            <td><?= $schedulestaffset->has('staff') ? $this->Html->link($schedulestaffset->staff->id, ['controller' => 'Staffs', 'action' => 'view', $schedulestaffset->staff->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($schedulestaffset->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Main') ?></th>
            <td><?= $schedulestaffset->main ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
</div>
