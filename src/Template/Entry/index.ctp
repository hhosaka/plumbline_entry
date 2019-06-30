 <?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Member $member
 */
?>

<div class="members form large-9 medium-8 columns content">
    <?= $this->Form->create($member) ?>
    <fieldset>
        <legend>
        お客様情報登録フォーム
        </legend>
        予約フォームのご利用ありがとうございます。<br>
        <?= $this->request->query["subject"] ?></th>
       （<?= $this->request->query["date"] ?>
        <?= $this->request->query["start_time"] ?> 開始）の予約を完了するために以下の項目について入力をお願いします。<br>
        <?php
            echo $information;
            echo $this->Form->control('family_name',['label'=>'姓']);
            echo $this->Form->control('first_name',['label'=>'名']);
            echo $this->Form->control('family_name_kana',['label'=>'セイ']);
            echo $this->Form->control('first_name_kana',['label'=>'メイ']);
            echo $this->Form->control('phone_number1',['label'=>'電話番号']);
            echo $this->Form->control('phone_number2',['label'=>'電話番号(予備)']);
            echo $this->Form->control('sex',['type'=>'select','label'=>'性別','options'=>['男性','女性']]);
            echo $this->Form->control('birthday',[
                'label'=>'生年月日',
                'type' => 'date',
                'dateFormat' => 'YMD',
                'monthNames' => false,
                'minYear'=>'1900',
                'separator' => array('年', '月', '日'),
                ]);
            echo $this->Form->control('zip_code',['label'=>'郵便番号']);
            echo $this->Form->control('prefecture',[
                'label'=>'都道府県',
                'type'=>'select',
                'options'=>[
                '東京都','神奈川県','北海道','青森県','岩手県','宮城県','秋田県','山形県','福島県','茨城県',
                '栃木県','群馬県','埼玉県','千葉県','新潟県','富山県','石川県','福井県','山梨県','長野県',
                '岐阜県','静岡県','愛知県','三重県','滋賀県','京都府','大阪府','兵庫県','奈良県','和歌山県',
                '鳥取県','島根県','岡山県','広島県','山口県','徳島県','香川県','愛媛県','高知県','福岡県',
                '佐賀県','長崎県','熊本県','大分県','宮崎県','鹿児島県','沖縄県']]);
            echo $this->Form->control('address1',['label'=>'住所']);
            echo $this->Form->control('address2',['label'=>'住所(続き)']);
            echo $this->Form->control('email1',['label'=>'メールアドレス']);
            echo $this->Form->control('confirm1',['label'=>'確認のためもう一度入力してください']);
            echo $this->Form->control('password',['label'=>'パスワード(6文字以上、16文字以下で設定してください)']);
            echo $this->Form->control('confirm2',['label'=>'確認のためもう一度入力してください','type' =>'password']);
    ?>
    </fieldset>
    <?= $this->Form->button(__('送信')) ?>
    <?= $this->Form->end() ?>
</div>
