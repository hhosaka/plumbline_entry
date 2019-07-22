<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Reservation[]|\Cake\Collection\CollectionInterface $reservations
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Reservation'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Schedules'), ['controller' => 'Schedules', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Schedule'), ['controller' => 'Schedules', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Customers'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Customer'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="reservations index large-9 medium-8 columns content">
    <h3><?= __('Reservations') ?></h3>
    <?=$this->Form->create() ?>
    <fieldset><?=$this->Form->text("date") ?></fieldset>
    <?=$this->Form->button("Send")?>
    <?=$this->Form->end()?>

    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col" width="5%"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col" width="15%"><?= $this->Paginator->sort('date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('schedule_id') ?></th>
                <th scope="col" width="10%"><?= $this->Paginator->sort('customer_id') ?></th>
                <th scope="col" width="10%"><?= $this->Paginator->sort('staff_id') ?></th>
                <th scope="col" width="10%"><?= $this->Paginator->sort('receiving_method') ?></th>
                <th scope="col" width="10%"><?= $this->Paginator->sort('status') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($reservations as $reservation): ?>
            <tr>
                <td><?= $this->Number->format($reservation->id) ?></td>
                <td><?= $reservation->schedule->date_time ?></td>
                <td><?= $reservation->has('schedule') ? $this->Html->link($reservation->schedule->subject, ['controller' => 'Schedules', 'action' => 'view', $reservation->schedule->id]) : '' ?></td>
                <td><?= $reservation->has('customer') ? $this->Html->link($reservation->customer->family_name.' '.$reservation->customer->first_name , ['controller' => 'Users', 'action' => 'view', $reservation->customer->id]) : '' ?></td>
                <td><?= $reservation->has('staff') ? $this->Html->link($reservation->staff->username, ['controller' => 'Users', 'action' => 'view', $reservation->staff->id]) : '' ?></td>
                <td><?= h($reservation->receiving_method) ?></td>
                <td><?= h($reservation->status) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $reservation->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $reservation->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $reservation->id], ['confirm' => __('Are you sure you want to delete # {0}?', $reservation->id)]) ?>
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
