<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Schedule $schedule
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Schedule'), ['action' => 'edit', $schedule->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Schedule'), ['action' => 'delete', $schedule->id], ['confirm' => __('Are you sure you want to delete # {0}?', $schedule->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Schedules'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Schedule'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Instructors'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Instructor'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Assistants'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Assistant'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Reservations'), ['controller' => 'Reservations', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Reservation'), ['controller' => 'Reservations', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="schedules view large-9 medium-8 columns content">
    <h3><?= h($schedule->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Subject') ?></th>
            <td><?= h($schedule->subject) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Instructor') ?></th>
            <td><?= $schedule->has('instructor') ? $this->Html->link($schedule->instructor->id, ['controller' => 'Users', 'action' => 'view', $schedule->instructor->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Assistant') ?></th>
            <td><?= $schedule->has('assistant') ? $this->Html->link($schedule->assistant->id, ['controller' => 'Users', 'action' => 'view', $schedule->assistant->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= h($schedule->status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Memo') ?></th>
            <td><?= h($schedule->memo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($schedule->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Period') ?></th>
            <td><?= $this->Number->format($schedule->period) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date Time') ?></th>
            <td><?= h($schedule->date_time) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date Creation') ?></th>
            <td><?= h($schedule->date_creation) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date Modification') ?></th>
            <td><?= h($schedule->date_modification) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Reservations') ?></h4>
        <?php if (!empty($schedule->reservations)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Schedule Id') ?></th>
                <th scope="col"><?= __('Customer Id') ?></th>
                <th scope="col"><?= __('Instructor Id') ?></th>
                <th scope="col"><?= __('Receiving Method') ?></th>
                <th scope="col"><?= __('Charge Method') ?></th>
                <th scope="col"><?= __('Status') ?></th>
                <th scope="col"><?= __('Memo') ?></th>
                <th scope="col"><?= __('Creation Date') ?></th>
                <th scope="col"><?= __('Modification Date') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($schedule->reservations as $reservations): ?>
            <tr>
                <td><?= h($reservations->id) ?></td>
                <td><?= h($reservations->schedule_id) ?></td>
                <td><?= h($reservations->customer_id) ?></td>
                <td><?= h($reservations->instructor_id) ?></td>
                <td><?= h($reservations->receiving_method) ?></td>
                <td><?= h($reservations->charge_method) ?></td>
                <td><?= h($reservations->status) ?></td>
                <td><?= h($reservations->memo) ?></td>
                <td><?= h($reservations->creation_date) ?></td>
                <td><?= h($reservations->modification_date) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Reservations', 'action' => 'view', $reservations->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Reservations', 'action' => 'edit', $reservations->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Reservations', 'action' => 'delete', $reservations->id], ['confirm' => __('Are you sure you want to delete # {0}?', $reservations->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
