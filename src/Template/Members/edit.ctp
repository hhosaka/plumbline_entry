<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Member $member
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $member->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $member->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Members'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Memberhistories'), ['controller' => 'Memberhistories', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Memberhistory'), ['controller' => 'Memberhistories', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Reservations'), ['controller' => 'Reservations', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Reservation'), ['controller' => 'Reservations', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="members form large-9 medium-8 columns content">
    <?= $this->Form->create($member) ?>
    <fieldset>
        <legend><?= __('Edit Member') ?></legend>
        <?php
            echo $this->Form->control('family_name');
            echo $this->Form->control('first_name');
            echo $this->Form->control('family_name_kana');
            echo $this->Form->control('first_name_kana');
            echo $this->Form->control('phone_number1');
            echo $this->Form->control('phone_number2');
            echo $this->Form->control('sex');
            echo $this->Form->control('birthday');
            echo $this->Form->control('zip_code');
            echo $this->Form->control('prefecture');
            echo $this->Form->control('address1');
            echo $this->Form->control('address2');
            echo $this->Form->control('email1');
            echo $this->Form->control('email2');
            echo $this->Form->control('password');
            echo $this->Form->control('status');
            echo $this->Form->control('memo');
            echo $this->Form->control('creation_date');
            echo $this->Form->control('modification_date');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
