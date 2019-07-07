<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Schedule $schedule
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Schedules'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Courses'), ['controller' => 'Courses', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Course'), ['controller' => 'Courses', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Memberhistories'), ['controller' => 'Memberhistories', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Memberhistory'), ['controller' => 'Memberhistories', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Reservations'), ['controller' => 'Reservations', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Reservation'), ['controller' => 'Reservations', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="schedules form large-9 medium-8 columns content">
    <?= $this->Form->create($schedule) ?>
    <fieldset>
        <legend><?= __('Add Schedule') ?></legend>
        <?php
            echo $this->Form->control('date_time');
            echo $this->Form->control('period');
            echo $this->Form->control('subject');
            echo $this->Form->control('course_id', ['options' => $courses]);
            echo $this->Form->control('instructor_id');
            echo $this->Form->control('assistant_id');
            echo $this->Form->control('status');
            echo $this->Form->control('memo');
            echo $this->Form->control('date_creation');
            echo $this->Form->control('date_modification');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
