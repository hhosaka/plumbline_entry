<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Staff[]|\Cake\Collection\CollectionInterface $staffs
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Staff'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Reservations'), ['controller' => 'Reservations', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Reservation'), ['controller' => 'Reservations', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="staffs index large-9 medium-8 columns content">
    <h3><?= __('Staffs') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('family_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('first_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('family_name_kana') ?></th>
                <th scope="col"><?= $this->Paginator->sort('first_name_kana') ?></th>
                <th scope="col"><?= $this->Paginator->sort('sex') ?></th>
                <th scope="col"><?= $this->Paginator->sort('birthday') ?></th>
                <th scope="col"><?= $this->Paginator->sort('phone_number1') ?></th>
                <th scope="col"><?= $this->Paginator->sort('phone_number2') ?></th>
                <th scope="col"><?= $this->Paginator->sort('email1') ?></th>
                <th scope="col"><?= $this->Paginator->sort('email2') ?></th>
                <th scope="col"><?= $this->Paginator->sort('zip_code') ?></th>
                <th scope="col"><?= $this->Paginator->sort('prefecture') ?></th>
                <th scope="col"><?= $this->Paginator->sort('address1') ?></th>
                <th scope="col"><?= $this->Paginator->sort('address2') ?></th>
                <th scope="col"><?= $this->Paginator->sort('status') ?></th>
                <th scope="col"><?= $this->Paginator->sort('memo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('creation_date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modification_date') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($staffs as $staff): ?>
            <tr>
                <td><?= h($staff->id) ?></td>
                <td><?= h($staff->family_name) ?></td>
                <td><?= h($staff->first_name) ?></td>
                <td><?= h($staff->family_name_kana) ?></td>
                <td><?= h($staff->first_name_kana) ?></td>
                <td><?= h($staff->sex) ?></td>
                <td><?= h($staff->birthday) ?></td>
                <td><?= h($staff->phone_number1) ?></td>
                <td><?= h($staff->phone_number2) ?></td>
                <td><?= h($staff->email1) ?></td>
                <td><?= h($staff->email2) ?></td>
                <td><?= h($staff->zip_code) ?></td>
                <td><?= h($staff->prefecture) ?></td>
                <td><?= h($staff->address1) ?></td>
                <td><?= h($staff->address2) ?></td>
                <td><?= h($staff->status) ?></td>
                <td><?= h($staff->memo) ?></td>
                <td><?= h($staff->creation_date) ?></td>
                <td><?= h($staff->modification_date) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $staff->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $staff->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $staff->id], ['confirm' => __('Are you sure you want to delete # {0}?', $staff->id)]) ?>
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
