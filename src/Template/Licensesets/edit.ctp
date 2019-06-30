<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Licenseset $licenseset
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $licenseset->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $licenseset->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Licensesets'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Staffs'), ['controller' => 'Staffs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Staff'), ['controller' => 'Staffs', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Licenses'), ['controller' => 'Licenses', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New License'), ['controller' => 'Licenses', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="licensesets form large-9 medium-8 columns content">
    <?= $this->Form->create($licenseset) ?>
    <fieldset>
        <legend><?= __('Edit Licenseset') ?></legend>
        <?php
            echo $this->Form->control('staff_id', ['options' => $staffs]);
            echo $this->Form->control('license_id', ['options' => $licenses]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
