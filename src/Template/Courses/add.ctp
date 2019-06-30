<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Course $course
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Courses'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Coursestaffsets'), ['controller' => 'Coursestaffsets', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Coursestaffset'), ['controller' => 'Coursestaffsets', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Equipmentsets'), ['controller' => 'Equipmentsets', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Equipmentset'), ['controller' => 'Equipmentsets', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Schedules'), ['controller' => 'Schedules', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Schedule'), ['controller' => 'Schedules', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="courses form large-9 medium-8 columns content">
    <?= $this->Form->create($course) ?>
    <fieldset>
        <legend><?= __('Add Course') ?></legend>
        <?php
            echo $this->Form->control('code');
            echo $this->Form->control('subject');
            echo $this->Form->control('description');
            echo $this->Form->control('capacity');
            echo $this->Form->control('period');
            echo $this->Form->control('status');
            echo $this->Form->control('memo');
            echo $this->Form->control('creation_date');
            echo $this->Form->control('modification_date');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
