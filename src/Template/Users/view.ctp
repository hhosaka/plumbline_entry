<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="users view large-9 medium-8 columns content">
    <h3><?= h($user->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Username') ?></th>
            <td><?= h($user->username) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Role') ?></th>
            <td><?= h($user->role) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Family Name') ?></th>
            <td><?= h($user->family_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('First Name') ?></th>
            <td><?= h($user->first_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Family Name Kana') ?></th>
            <td><?= h($user->family_name_kana) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('First Name Kana') ?></th>
            <td><?= h($user->first_name_kana) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Phone Number1') ?></th>
            <td><?= h($user->phone_number1) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Phone Number2') ?></th>
            <td><?= h($user->phone_number2) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Sex') ?></th>
            <td><?= h($user->sex) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Zip Code') ?></th>
            <td><?= h($user->zip_code) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Prefecture') ?></th>
            <td><?= h($user->prefecture) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Address1') ?></th>
            <td><?= h($user->address1) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Address2') ?></th>
            <td><?= h($user->address2) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email1') ?></th>
            <td><?= h($user->email1) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email2') ?></th>
            <td><?= h($user->email2) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Password') ?></th>
            <td><?= h($user->password) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= h($user->status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Memo') ?></th>
            <td><?= h($user->memo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($user->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Birthday') ?></th>
            <td><?= h($user->birthday) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Creation Date') ?></th>
            <td><?= h($user->creation_date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modification Date') ?></th>
            <td><?= h($user->modification_date) ?></td>
        </tr>
    </table>
</div>
