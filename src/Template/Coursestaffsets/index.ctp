<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Coursestaffset[]|\Cake\Collection\CollectionInterface $coursestaffsets
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Coursestaffset'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Courses'), ['controller' => 'Courses', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Course'), ['controller' => 'Courses', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Staffs'), ['controller' => 'Staffs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Staff'), ['controller' => 'Staffs', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="coursestaffsets index large-9 medium-8 columns content">
    <h3><?= __('Coursestaffsets') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('course_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('staff_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($coursestaffsets as $coursestaffset): ?>
            <tr>
                <td><?= $this->Number->format($coursestaffset->id) ?></td>
                <td><?= $coursestaffset->has('course') ? $this->Html->link($coursestaffset->course->id, ['controller' => 'Courses', 'action' => 'view', $coursestaffset->course->id]) : '' ?></td>
                <td><?= $coursestaffset->has('staff') ? $this->Html->link($coursestaffset->staff->id, ['controller' => 'Staffs', 'action' => 'view', $coursestaffset->staff->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $coursestaffset->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $coursestaffset->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $coursestaffset->id], ['confirm' => __('Are you sure you want to delete # {0}?', $coursestaffset->id)]) ?>
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
