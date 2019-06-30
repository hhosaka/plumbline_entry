<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Staff $staff
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Staff'), ['action' => 'edit', $staff->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Staff'), ['action' => 'delete', $staff->id], ['confirm' => __('Are you sure you want to delete # {0}?', $staff->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Staffs'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Staff'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Coursestaffsets'), ['controller' => 'Coursestaffsets', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Coursestaffset'), ['controller' => 'Coursestaffsets', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Licensesets'), ['controller' => 'Licensesets', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Licenseset'), ['controller' => 'Licensesets', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Reservations'), ['controller' => 'Reservations', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Reservation'), ['controller' => 'Reservations', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Schedulestaffsets'), ['controller' => 'Schedulestaffsets', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Schedulestaffset'), ['controller' => 'Schedulestaffsets', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="staffs view large-9 medium-8 columns content">
    <h3><?= h($staff->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Code') ?></th>
            <td><?= h($staff->code) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Family Name') ?></th>
            <td><?= h($staff->family_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('First Name') ?></th>
            <td><?= h($staff->first_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Family Name Kana') ?></th>
            <td><?= h($staff->family_name_kana) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('First Name Kana') ?></th>
            <td><?= h($staff->first_name_kana) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Sex') ?></th>
            <td><?= h($staff->sex) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Phone Number1') ?></th>
            <td><?= h($staff->phone_number1) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Phone Number2') ?></th>
            <td><?= h($staff->phone_number2) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email1') ?></th>
            <td><?= h($staff->email1) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email2') ?></th>
            <td><?= h($staff->email2) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Zip Code') ?></th>
            <td><?= h($staff->zip_code) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Prefecture') ?></th>
            <td><?= h($staff->prefecture) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Address1') ?></th>
            <td><?= h($staff->address1) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Address2') ?></th>
            <td><?= h($staff->address2) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= h($staff->status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Memo') ?></th>
            <td><?= h($staff->memo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($staff->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Birthday') ?></th>
            <td><?= h($staff->birthday) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Creation Date') ?></th>
            <td><?= h($staff->creation_date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modification Date') ?></th>
            <td><?= h($staff->modification_date) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Coursestaffsets') ?></h4>
        <?php if (!empty($staff->coursestaffsets)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Course Id') ?></th>
                <th scope="col"><?= __('Staff Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($staff->coursestaffsets as $coursestaffsets): ?>
            <tr>
                <td><?= h($coursestaffsets->id) ?></td>
                <td><?= h($coursestaffsets->course_id) ?></td>
                <td><?= h($coursestaffsets->staff_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Coursestaffsets', 'action' => 'view', $coursestaffsets->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Coursestaffsets', 'action' => 'edit', $coursestaffsets->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Coursestaffsets', 'action' => 'delete', $coursestaffsets->id], ['confirm' => __('Are you sure you want to delete # {0}?', $coursestaffsets->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Licensesets') ?></h4>
        <?php if (!empty($staff->licensesets)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Staff Id') ?></th>
                <th scope="col"><?= __('License Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($staff->licensesets as $licensesets): ?>
            <tr>
                <td><?= h($licensesets->id) ?></td>
                <td><?= h($licensesets->staff_id) ?></td>
                <td><?= h($licensesets->license_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Licensesets', 'action' => 'view', $licensesets->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Licensesets', 'action' => 'edit', $licensesets->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Licensesets', 'action' => 'delete', $licensesets->id], ['confirm' => __('Are you sure you want to delete # {0}?', $licensesets->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Reservations') ?></h4>
        <?php if (!empty($staff->reservations)): ?>
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
            <?php foreach ($staff->reservations as $reservations): ?>
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
    <div class="related">
        <h4><?= __('Related Schedulestaffsets') ?></h4>
        <?php if (!empty($staff->schedulestaffsets)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Schedule Id') ?></th>
                <th scope="col"><?= __('Staff Id') ?></th>
                <th scope="col"><?= __('Main') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($staff->schedulestaffsets as $schedulestaffsets): ?>
            <tr>
                <td><?= h($schedulestaffsets->id) ?></td>
                <td><?= h($schedulestaffsets->schedule_id) ?></td>
                <td><?= h($schedulestaffsets->staff_id) ?></td>
                <td><?= h($schedulestaffsets->main) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Schedulestaffsets', 'action' => 'view', $schedulestaffsets->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Schedulestaffsets', 'action' => 'edit', $schedulestaffsets->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Schedulestaffsets', 'action' => 'delete', $schedulestaffsets->id], ['confirm' => __('Are you sure you want to delete # {0}?', $schedulestaffsets->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
