<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Coursestaffset $coursestaffset
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $coursestaffset->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $coursestaffset->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Coursestaffsets'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Courses'), ['controller' => 'Courses', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Course'), ['controller' => 'Courses', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Staffs'), ['controller' => 'Staffs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Staff'), ['controller' => 'Staffs', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="coursestaffsets form large-9 medium-8 columns content">
    <?= $this->Form->create($coursestaffset) ?>
    <fieldset>
        <legend><?= __('Edit Coursestaffset') ?></legend>
        <?php
            echo $this->Form->control('course_id', ['options' => $courses]);
            echo $this->Form->control('staff_id', ['options' => $staffs]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
