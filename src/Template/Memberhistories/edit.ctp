<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Memberhistory $memberhistory
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $memberhistory->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $memberhistory->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Memberhistories'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Members'), ['controller' => 'Members', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Member'), ['controller' => 'Members', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Schedules'), ['controller' => 'Schedules', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Schedule'), ['controller' => 'Schedules', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="memberhistories form large-9 medium-8 columns content">
    <?= $this->Form->create($memberhistory) ?>
    <fieldset>
        <legend><?= __('Edit Memberhistory') ?></legend>
        <?php
            echo $this->Form->control('member_id', ['options' => $members]);
            echo $this->Form->control('schedule_id', ['options' => $schedules, 'empty' => true]);
            echo $this->Form->control('amount');
            echo $this->Form->control('memo');
            echo $this->Form->control('creation_date');
            echo $this->Form->control('modification_date');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
