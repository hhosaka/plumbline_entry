<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Member[]|\Cake\Collection\CollectionInterface $members
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Member'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Memberhistories'), ['controller' => 'Memberhistories', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Memberhistory'), ['controller' => 'Memberhistories', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Reservations'), ['controller' => 'Reservations', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Reservation'), ['controller' => 'Reservations', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="members index large-9 medium-8 columns content">
    <h3><?= __('Members') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('family_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('first_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('family_name_kana') ?></th>
                <th scope="col"><?= $this->Paginator->sort('first_name_kana') ?></th>
                <th scope="col"><?= $this->Paginator->sort('phone_number1') ?></th>
                <th scope="col"><?= $this->Paginator->sort('phone_number2') ?></th>
                <th scope="col"><?= $this->Paginator->sort('sex') ?></th>
                <th scope="col"><?= $this->Paginator->sort('birthday') ?></th>
                <th scope="col"><?= $this->Paginator->sort('zip_code') ?></th>
                <th scope="col"><?= $this->Paginator->sort('prefecture') ?></th>
                <th scope="col"><?= $this->Paginator->sort('address1') ?></th>
                <th scope="col"><?= $this->Paginator->sort('address2') ?></th>
                <th scope="col"><?= $this->Paginator->sort('email1') ?></th>
                <th scope="col"><?= $this->Paginator->sort('email2') ?></th>
                <th scope="col"><?= $this->Paginator->sort('password') ?></th>
                <th scope="col"><?= $this->Paginator->sort('status') ?></th>
                <th scope="col"><?= $this->Paginator->sort('memo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('creation_date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modification_date') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($members as $member): ?>
            <tr>
                <td><?= $this->Number->format($member->id) ?></td>
                <td><?= h($member->family_name) ?></td>
                <td><?= h($member->first_name) ?></td>
                <td><?= h($member->family_name_kana) ?></td>
                <td><?= h($member->first_name_kana) ?></td>
                <td><?= h($member->phone_number1) ?></td>
                <td><?= h($member->phone_number2) ?></td>
                <td><?= h($member->sex) ?></td>
                <td><?= h($member->birthday) ?></td>
                <td><?= h($member->zip_code) ?></td>
                <td><?= h($member->prefecture) ?></td>
                <td><?= h($member->address1) ?></td>
                <td><?= h($member->address2) ?></td>
                <td><?= h($member->email1) ?></td>
                <td><?= h($member->email2) ?></td>
                <td><?= h($member->password) ?></td>
                <td><?= h($member->status) ?></td>
                <td><?= h($member->memo) ?></td>
                <td><?= h($member->creation_date) ?></td>
                <td><?= h($member->modification_date) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $member->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $member->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $member->id], ['confirm' => __('Are you sure you want to delete # {0}?', $member->id)]) ?>
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
