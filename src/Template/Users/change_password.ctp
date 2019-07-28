<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div class="users form large-9 medium-8 columns content">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('パスワード変更？？') ?></legend>
        <?php
            echo $this->Form->control('oldone',['label'=>'現在のパスワードを入力してください']);
            echo $this->Form->control('password',['label'=>'新しいパスワードを入力してください']);
            echo $this->Form->control('confirm',['type'=>'password','label'=>'確認の為に同じパスワードを入力してください']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
