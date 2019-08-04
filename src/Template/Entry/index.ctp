
<div class="members form large-9 medium-8 columns content">
    <fieldset>
        <legend>予約完了</legend>
        <?= $user['family_name'];?>様<br>
        以下の通り、の予約を受け付けました<br>
        タイトル：<?= $schedule['subject'] ?><br>
        開始時間：<?= $schedule['date_time'] ?><br>
        インストラクター：<?= $instructor ?><br>
        <?= $user['email1'];?>に確認のメールを送付しておりますので、ご確認ください。<br>
        それでは、当日お待ちしています。
    </fieldset>
</div>


