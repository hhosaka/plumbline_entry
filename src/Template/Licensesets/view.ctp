<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Licenseset $licenseset
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Licenseset'), ['action' => 'edit', $licenseset->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Licenseset'), ['action' => 'delete', $licenseset->id], ['confirm' => __('Are you sure you want to delete # {0}?', $licenseset->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Licensesets'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Licenseset'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Staffs'), ['controller' => 'Staffs', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Staff'), ['controller' => 'Staffs', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Licenses'), ['controller' => 'Licenses', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New License'), ['controller' => 'Licenses', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="licensesets view large-9 medium-8 columns content">
    <h3><?= h($licenseset->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Staff') ?></th>
            <td><?= $licenseset->has('staff') ? $this->Html->link($licenseset->staff->id, ['controller' => 'Staffs', 'action' => 'view', $licenseset->staff->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('License') ?></th>
            <td><?= $licenseset->has('license') ? $this->Html->link($licenseset->license->title, ['controller' => 'Licenses', 'action' => 'view', $licenseset->license->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($licenseset->id) ?></td>
        </tr>
    </table>
</div>
