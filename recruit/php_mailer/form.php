<?php
$templete = 'form';

session_start();
$token = sha1(uniqid(rand(), true));
$_SESSION['key'] = $token;

?>

<div class="form">
  <form method="post" class="validationForm pc-container" id="the-form" enctype="multipart/form-data">
    <div class="form__list">

      <div class="formList">
        <div class="formList__title">
          <label class="title">お名前(仮名可)</label>
          <span class="markRequired tab-inline">必須</span>
        </div>
        <div class="formList__content flex_required">
          <input type="text" name="name" value="" class="maxlength required" data-maxlength="10">
          <span class="markRequired noTab">必須</span>
        </div>
      </div>

      <div class="formList">
        <div class="formList__title">
          <label class="title">電話番号(半角)</label>
          <span class="markRequired tab-inline">必須</span>
        </div>
        <div class="formList__content">
          <input type="telephone" name="telephone" value="" size="40" id="telephone" class="telephone required" placeholder="">
          <span class="markRequired noTab">必須</span>
        </div>
      </div>

      <div class="formList">
        <div class="formList__title">
          <label class="title">年齢</label>
          <span class="markRequired tab-inline">必須</span>
        </div>
        <div class="formList__content">
          <input type="number" class="age required" name="age" value="" min="18">
          <span class="markRequired noTab">必須</span>
        </div>
      </div>

      <div class="formList">
        <div class="formList__title">
          <label class="title title-area">希望勤務地</label>
        </div>
        <div class="formList__content form-radio">
          <div class="form-radio__list">
            <input type="radio" name="location" value="梅田" id="umeda" />
            <label for="umeda">梅田</label>
          </div>
          <div class="form-radio__list">
            <input type="radio" name="location" value="日本橋" id="nihonbashi" />
            <label for="nihonbashi">日本橋</label>
          </div>
          <div class="form-radio__list">
            <input type="radio" name="location" value="天王寺" id="tennoji" />
            <label for="tennoji">天王寺</label>
          </div>
          <div class="form-radio__list">
            <input type="radio" name="location" value="難波" id="nanba" />
            <label for="nanba">難波</label>
          </div>
          <div class="form-radio__list">
            <input type="radio" name="location" value="谷九" id="tanimachi9" />
            <label for="tanimachi9">谷九</label>
          </div>
          <div class="form-radio__list">
            <input type="radio" name="location" value="京橋" id="kyobashi" />
            <label for="kyobashi">京橋</label>
          </div>
        </div>
      </div>

      <div class="formList">
        <div class="formList__title">
          <label class="title">ご質問など</label>
        </div>
        <div class="formList__content">
          <textarea name="text" rows="11"></textarea>
        </div>
      </div>
    </div>
    <div class="form__submit">
      <button type="submit" class="form__submit--button" id="submit">送信</button>
      <input type="hidden" name="token" value="<?= $token ?>">
      <input type="hidden" name="recaptchaToken" id="recaptchaToken">
    </div>
  </form>

  <div id="form-load">
    <div class="load">
    </div>
    <div class="load1">
      <br>
      <div class="loader"></div>
      <p>送信中</p>
    </div>
  </div>
</div>

<!-- 結果メッセージ -->
<div id="result"></div><!-- /#result -->

<script src="https://www.google.com/recaptcha/api.js?render=6Ld1BT4kAAAAAKgrkcfnuJvMK2lwQZUt4CqJnbkv"></script>
<script type="module" src="php_mailer/js/form.js"></script>