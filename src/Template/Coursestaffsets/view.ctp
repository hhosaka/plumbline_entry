<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Coursestaffset $coursestaffset
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Coursestaffset'), ['action' => 'edit', $coursestaffset->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Coursestaffset'), ['action' => 'delete', $coursestaffset->id], ['confirm' => __('Are you sure you want to delete # {0}?', $coursestaffset->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Coursestaffsets'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Coursestaffset'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Courses'), ['controller' => 'Courses', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Course'), ['controller' => 'Courses', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Staffs'), ['controller' => 'Staffs', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Staff'), ['controller' => 'Staffs', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="coursestaffsets view large-9 medium-8 columns content">
    <h3><?= h($coursestaffset->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Course') ?></th>
            <td><?= $coursestaffset->has('course') ? $this->Html->link($coursestaffset->course->id, ['controller' => 'Courses', 'action' => 'view', $coursestaffset->course->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Staff') ?></th>
            <td><?= $coursestaffset->has('staff') ? $this->Html->link($coursestaffset->staff->id, ['controller' => 'Staffs', 'action' => 'view', $coursestaffset->staff->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($coursestaffset->id) ?></td>
        </tr>
    </table>
</div>
