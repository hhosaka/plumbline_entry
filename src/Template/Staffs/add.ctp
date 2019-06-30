<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Staff $staff
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Staffs'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Coursestaffsets'), ['controller' => 'Coursestaffsets', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Coursestaffset'), ['controller' => 'Coursestaffsets', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Licensesets'), ['controller' => 'Licensesets', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Licenseset'), ['controller' => 'Licensesets', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Reservations'), ['controller' => 'Reservations', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Reservation'), ['controller' => 'Reservations', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Schedulestaffsets'), ['controller' => 'Schedulestaffsets', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Schedulestaffset'), ['controller' => 'Schedulestaffsets', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="staffs form large-9 medium-8 columns content">
    <?= $this->Form->create($staff) ?>
    <fieldset>
        <legend><?= __('Add Staff') ?></legend>
        <?php
            echo $this->Form->control('code');
            echo $this->Form->control('family_name');
            echo $this->Form->control('first_name');
            echo $this->Form->control('family_name_kana');
            echo $this->Form->control('first_name_kana');
            echo $this->Form->control('sex');
            echo $this->Form->control('birthday');
            echo $this->Form->control('phone_number1');
            echo $this->Form->control('phone_number2');
            echo $this->Form->control('email1');
            echo $this->Form->control('email2');
            echo $this->Form->control('zip_code');
            echo $this->Form->control('prefecture');
            echo $this->Form->control('address1');
            echo $this->Form->control('address2');
            echo $this->Form->control('status');
            echo $this->Form->control('memo');
            echo $this->Form->control('creation_date');
            echo $this->Form->control('modification_date');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
