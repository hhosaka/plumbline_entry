<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Member $member
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Member'), ['action' => 'edit', $member->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Member'), ['action' => 'delete', $member->id], ['confirm' => __('Are you sure you want to delete # {0}?', $member->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Members'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Member'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Memberhistories'), ['controller' => 'Memberhistories', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Memberhistory'), ['controller' => 'Memberhistories', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Reservations'), ['controller' => 'Reservations', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Reservation'), ['controller' => 'Reservations', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="members view large-9 medium-8 columns content">
    <h3><?= h($member->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Family Name') ?></th>
            <td><?= h($member->family_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('First Name') ?></th>
            <td><?= h($member->first_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Family Name Kana') ?></th>
            <td><?= h($member->family_name_kana) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('First Name Kana') ?></th>
            <td><?= h($member->first_name_kana) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Phone Number1') ?></th>
            <td><?= h($member->phone_number1) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Phone Number2') ?></th>
            <td><?= h($member->phone_number2) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Sex') ?></th>
            <td><?= h($member->sex) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Zip Code') ?></th>
            <td><?= h($member->zip_code) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Prefecture') ?></th>
            <td><?= h($member->prefecture) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Address1') ?></th>
            <td><?= h($member->address1) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Address2') ?></th>
            <td><?= h($member->address2) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email1') ?></th>
            <td><?= h($member->email1) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email2') ?></th>
            <td><?= h($member->email2) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Password') ?></th>
            <td><?= h($member->password) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= h($member->status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Memo') ?></th>
            <td><?= h($member->memo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($member->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Birthday') ?></th>
            <td><?= h($member->birthday) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Creation Date') ?></th>
            <td><?= h($member->creation_date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modification Date') ?></th>
            <td><?= h($member->modification_date) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Memberhistories') ?></h4>
        <?php if (!empty($member->memberhistories)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Member Id') ?></th>
                <th scope="col"><?= __('Schedule Id') ?></th>
                <th scope="col"><?= __('Amount') ?></th>
                <th scope="col"><?= __('Memo') ?></th>
                <th scope="col"><?= __('Creation Date') ?></th>
                <th scope="col"><?= __('Modification Date') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($member->memberhistories as $memberhistories): ?>
            <tr>
                <td><?= h($memberhistories->id) ?></td>
                <td><?= h($memberhistories->member_id) ?></td>
                <td><?= h($memberhistories->schedule_id) ?></td>
                <td><?= h($memberhistories->amount) ?></td>
                <td><?= h($memberhistories->memo) ?></td>
                <td><?= h($memberhistories->creation_date) ?></td>
                <td><?= h($memberhistories->modification_date) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Memberhistories', 'action' => 'view', $memberhistories->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Memberhistories', 'action' => 'edit', $memberhistories->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Memberhistories', 'action' => 'delete', $memberhistories->id], ['confirm' => __('Are you sure you want to delete # {0}?', $memberhistories->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Reservations') ?></h4>
        <?php if (!empty($member->reservations)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Schedule Id') ?></th>
                <th scope="col"><?= __('Member Id') ?></th>
                <th scope="col"><?= __('Staff Id') ?></th>
                <th scope="col"><?= __('Receiving Method') ?></th>
                <th scope="col"><?= __('Charge Method') ?></th>
                <th scope="col"><?= __('Status') ?></th>
                <th scope="col"><?= __('Memo') ?></th>
                <th scope="col"><?= __('Creation Date') ?></th>
                <th scope="col"><?= __('Modification Date') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($member->reservations as $reservations): ?>
            <tr>
                <td><?= h($reservations->id) ?></td>
                <td><?= h($reservations->schedule_id) ?></td>
                <td><?= h($reservations->member_id) ?></td>
                <td><?= h($reservations->staff_id) ?></td>
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
