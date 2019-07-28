<?php
/**
 * @var \App\View\AppView $this
 */
?>
<div class="users form">
<?= $this->Flash->render('auth') ?>
    <?= $this->Form->create() ?>
    <fieldset>
        <legend><?= __('ログインユーザー認証') ?></legend>
        <?= $this->Form->control('username',['label'=>'ユーザー名(メールアドレス)を入力してください']) ?>
        <?= $this->Form->control('password',['label'=>'パスワードを入力してください']) ?>
    </fieldset>
    <?= $this->Form->button(__('Login')); ?>
    <?= $this->Form->end() ?>
</div>
