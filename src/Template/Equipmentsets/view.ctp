<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Equipmentset $equipmentset
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Equipmentset'), ['action' => 'edit', $equipmentset->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Equipmentset'), ['action' => 'delete', $equipmentset->id], ['confirm' => __('Are you sure you want to delete # {0}?', $equipmentset->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Equipmentsets'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Equipmentset'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Courses'), ['controller' => 'Courses', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Course'), ['controller' => 'Courses', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Equipment'), ['controller' => 'Equipment', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Equipment'), ['controller' => 'Equipment', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="equipmentsets view large-9 medium-8 columns content">
    <h3><?= h($equipmentset->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Course') ?></th>
            <td><?= $equipmentset->has('course') ? $this->Html->link($equipmentset->course->id, ['controller' => 'Courses', 'action' => 'view', $equipmentset->course->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Equipment') ?></th>
            <td><?= $equipmentset->has('equipment') ? $this->Html->link($equipmentset->equipment->id, ['controller' => 'Equipment', 'action' => 'view', $equipmentset->equipment->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($equipmentset->id) ?></td>
        </tr>
    </table>
</div>
