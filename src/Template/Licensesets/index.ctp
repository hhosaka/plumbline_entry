<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Licenseset[]|\Cake\Collection\CollectionInterface $licensesets
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Licenseset'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Staffs'), ['controller' => 'Staffs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Staff'), ['controller' => 'Staffs', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Licenses'), ['controller' => 'Licenses', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New License'), ['controller' => 'Licenses', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="licensesets index large-9 medium-8 columns content">
    <h3><?= __('Licensesets') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('staff_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('license_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($licensesets as $licenseset): ?>
            <tr>
                <td><?= $this->Number->format($licenseset->id) ?></td>
                <td><?= $licenseset->has('staff') ? $this->Html->link($licenseset->staff->id, ['controller' => 'Staffs', 'action' => 'view', $licenseset->staff->id]) : '' ?></td>
                <td><?= $licenseset->has('license') ? $this->Html->link($licenseset->license->title, ['controller' => 'Licenses', 'action' => 'view', $licenseset->license->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $licenseset->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $licenseset->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $licenseset->id], ['confirm' => __('Are you sure you want to delete # {0}?', $licenseset->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
