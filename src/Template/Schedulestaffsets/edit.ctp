<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Schedulestaffset $schedulestaffset
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $schedulestaffset->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $schedulestaffset->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Schedulestaffsets'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Schedules'), ['controller' => 'Schedules', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Schedule'), ['controller' => 'Schedules', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Staffs'), ['controller' => 'Staffs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Staff'), ['controller' => 'Staffs', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="schedulestaffsets form large-9 medium-8 columns content">
    <?= $this->Form->create($schedulestaffset) ?>
    <fieldset>
        <legend><?= __('Edit Schedulestaffset') ?></legend>
        <?php
            echo $this->Form->control('schedule_id', ['options' => $schedules]);
            echo $this->Form->control('staff_id', ['options' => $staffs]);
            echo $this->Form->control('main');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
