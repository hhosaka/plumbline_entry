この内容で登録してよろしいですか。<br>

<div class="members form large-9 medium-8 columns content">
<?= $this->Form->create('Member',['action'=>'add']) ?>
    <fieldset>
    <dl>
      <dt><?php echo __("姓"); ?>&nbsp;</dt>
      <dd><?php echo $data["family_name"]; ?>&nbsp;</dd>
    </dl>

    <dl>
      <dt><?php echo __("名"); ?>&nbsp;</dt>
      <dd><?php echo $data["first_name"]; ?>&nbsp;</dd>
    </dl>

    <dl>
      <dt><?php echo __("セイ"); ?>&nbsp;</dt>
      <dd><?php echo $data["family_name_kana"]; ?>&nbsp;</dd>
    </dl>

    <dl>
      <dt><?php echo __("メイ"); ?>&nbsp;</dt>
      <dd><?php echo $data["first_name_kana"]; ?>&nbsp;</dd>
    </dl>

    <dl>
      <dt><?php echo __("電話番号１"); ?>&nbsp;</dt>
      <dd><?php echo $data["phone_number1"]; ?>&nbsp;</dd>
    </dl>

    <dl>
      <dt><?php echo __("電話番号２"); ?>&nbsp;</dt>
      <dd><?php echo $data["phone_number2"]; ?>&nbsp;</dd>
    </dl>

    <dl>
      <dt><?php echo __("性別"); ?>&nbsp;</dt>
      <dd><?php echo $data["sex"]; ?>&nbsp;</dd>
    </dl>

    <dl>
      <dt><?php echo __("誕生日"); ?>&nbsp;</dt>
      <dd><?php echo $data["birthday"]["year"] . "-" . $data["birthday"]["month"]. "-" . $data["birthday"]["day"]  ; ?>&nbsp;</dd>
    </dl>

    <dl>
      <dt><?php echo __("郵便番号"); ?>&nbsp;</dt>
      <dd><?php echo $data["zip_code"]; ?>&nbsp;</dd>
    </dl>

    <dl>
      <dt><?php echo __("都道府県"); ?>&nbsp;</dt>
      <dd><?php echo $data["prefecture"]; ?>&nbsp;</dd>
    </dl>

    <dl>
      <dt><?php echo __("住所１"); ?>&nbsp;</dt>
      <dd><?php echo $data["address1"]; ?>&nbsp;</dd>
    </dl>

    <dl>
      <dt><?php echo __("住所２"); ?>&nbsp;</dt>
      <dd><?php echo $data["address2"]; ?>&nbsp;</dd>
    </dl>

    <dl>
      <dt><?php echo __("メールアドレス１"); ?>&nbsp;</dt>
      <dd><?php echo $data["email1"]; ?>&nbsp;</dd>
    </dl>

    <dl>
      <dt><?php echo __("メールアドレス２"); ?>&nbsp;</dt>
      <dd><?php echo $data["email2"]; ?>&nbsp;</dd>
    </dl>
    <?php
        echo $this->Form->hidden('first_name'             , array('value' => $data["first_name"]           ) )."\n";
    ?>
    <?php $this->Form->value($data["family_name"]); ?>
    </fieldset>
    <?= $this->Form->button(__('back'), ['onclick' => 'history.back()', 'type' => 'button']) ?>
    <?= $this->Form->button(__('submit')) ?>
</div>
