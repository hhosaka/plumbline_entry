<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Equipment $equipment
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Equipment'), ['action' => 'edit', $equipment->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Equipment'), ['action' => 'delete', $equipment->id], ['confirm' => __('Are you sure you want to delete # {0}?', $equipment->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Equipments'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Equipment'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Equipmentsets'), ['controller' => 'Equipmentsets', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Equipmentset'), ['controller' => 'Equipmentsets', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="equipments view large-9 medium-8 columns content">
    <h3><?= h($equipment->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($equipment->Name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Description') ?></th>
            <td><?= h($equipment->description) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Memo') ?></th>
            <td><?= h($equipment->memo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($equipment->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Creation Date') ?></th>
            <td><?= h($equipment->creation_date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modification Date') ?></th>
            <td><?= h($equipment->modification_date) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Equipmentsets') ?></h4>
        <?php if (!empty($equipment->equipmentsets)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Course Id') ?></th>
                <th scope="col"><?= __('Equipment Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($equipment->equipmentsets as $equipmentsets): ?>
            <tr>
                <td><?= h($equipmentsets->id) ?></td>
                <td><?= h($equipmentsets->course_id) ?></td>
                <td><?= h($equipmentsets->equipment_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Equipmentsets', 'action' => 'view', $equipmentsets->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Equipmentsets', 'action' => 'edit', $equipmentsets->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Equipmentsets', 'action' => 'delete', $equipmentsets->id], ['confirm' => __('Are you sure you want to delete # {0}?', $equipmentsets->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
