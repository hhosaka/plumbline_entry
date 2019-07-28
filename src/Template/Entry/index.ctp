<legend><?= __('ユーザー操作画面') ?></legend>
<ul>
    <li><?= $this->Html->link('パスワードの変更', ['controller' => 'Users', 'action' => 'changePassword'])  ?></li>
    <li><?= $this->Html->link('情報の変更', ['controller' => 'Users', 'action' => 'editSelf'])  ?></li>
    <li><?= $this->Html->link('ログアウト', ['controller' => 'Users', 'action' => 'logout'])  ?></li>
</ul>

