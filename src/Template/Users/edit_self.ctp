<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div class="users form large-9 medium-8 columns content">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('情報の修正') ?></legend>
        <?php
            echo $this->Form->control('username');
            echo $this->Form->control('family_name');
            echo $this->Form->control('first_name');
            echo $this->Form->control('family_name_kana');
            echo $this->Form->control('first_name_kana');
            echo $this->Form->control('phone_number1');
            echo $this->Form->control('phone_number2');
            echo $this->Form->control('sex');
            echo $this->Form->control('birthday');
            echo $this->Form->control('zip_code');
            echo $this->Form->control('prefecture');
            echo $this->Form->control('address1');
            echo $this->Form->control('address2');
            echo $this->Form->control('email1');
            echo $this->Form->control('email2');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
