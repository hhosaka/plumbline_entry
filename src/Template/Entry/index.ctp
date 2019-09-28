
<div class="members form large-9 medium-8 columns content">
    <fieldset>
        <legend>予約完了</legend>
        <?= $user['family_name'];?>様<br>
        以下の通り、の予約を受け付けています。<br>
        タイトル：<?= $schedule['subject'] ?><br>
        開始時間：<?= $schedule['date_time'] ?><br>
        インストラクター：<?= $instructor ?><br>
        それでは、当日お待ちしています。
        <?php
            echo $this->Form->create();
            echo $this->Form->submit('戻る'); 
            echo $this->Form->submit('予約をキャンセル',['name'=>'cancel']); 
            echo $this->Form->end();
        ?>
    </fieldset>
</div>


