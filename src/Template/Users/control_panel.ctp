<legend><?= __('ユーザー操作画面') ?></legend>
<ul>
    <li><?= $this->Html->link('パスワードの変更', ['action' => 'changePassword'])  ?></li>
    <li><?= $this->Html->link('情報の変更', ['action' => 'editSelf'])  ?></li>
    <li><?= $this->Html->link('ログアウト', ['action' => 'logout'])  ?></li>
</ul>

