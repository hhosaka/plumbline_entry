<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Equipment $equipment
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $equipment->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $equipment->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Equipments'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Equipmentsets'), ['controller' => 'Equipmentsets', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Equipmentset'), ['controller' => 'Equipmentsets', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="equipments form large-9 medium-8 columns content">
    <?= $this->Form->create($equipment) ?>
    <fieldset>
        <legend><?= __('Edit Equipment') ?></legend>
        <?php
            echo $this->Form->control('Name');
            echo $this->Form->control('description');
            echo $this->Form->control('memo');
            echo $this->Form->control('creation_date');
            echo $this->Form->control('modification_date');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
