<?php
$templete = 'form';

// session_start();
// $token = sha1(uniqid(rand(), true));
// $_SESSION['key'] = $token;

?>

<div class="form inner">
  <form method="post" class="validationForm" id="the-form" enctype="multipart/form-data">

    <div class="form-box hissu">
      <label class="title">お名前</label>
      <input type="text" name=" name" value="" class="maxlength required" data-maxlength="10">
      <span class="must">必須</span>
    </div>

    <div class="form-box hissu">
      <label class="title">電話番号(半角)</label>
      <input type="tel" name=" tel" value="" size="" id="telephone" class="required tel telephone">
      <span class="must">必須</span>
    </div>

    <div class="form-box hissu">
      <label class="title">メールアドレス</label>
      <input type="email" name=" email" value="" size="" id="email" class="required email" placeholder="">
      <span class="must">必須</span>
    </div>

    <div class="form-box hissu">
      <label class="title">年齢</label>
      <input type="number" name="age" value="" min="18" class=" required" placeholder="">
      <span class="must">必須</span>
    </div>

    <div class="form-box hissu short">
      <label class="form-box-label title">希望勤務地</label>
      <div class="form-box-radio">
        <div class="form-box-radio-inner">
          <input type="checkbox" name="kinmu[]" value="日本橋" id="kinmu1">
          <label for="kinmu1"> 日本橋</label>
        </div>
        <div class="form-box-radio-inner">
          <input type="checkbox" name="kinmu[]" value="梅田" id="kinmu2">
          <label for="kinmu2"> 梅田</label>
        </div>
        <div class="form-box-radio-inner">
          <input type="checkbox" name="kinmu[]" value="難波" id="kinmu3">
          <label for="kinmu3"> 難波</label>
        </div>
        <div class="form-box-radio-inner">
          <input type="checkbox" name="kinmu[]" value="京橋" id="kinmu4">
          <label for="kinmu4"> 京橋</label>
        </div>
        <div class="form-box-radio-inner">
          <input type="checkbox" name="kinmu[]" value="谷九" id="kinmu5">
          <label for="kinmu5"> 谷九</label>
        </div>
        <div class="form-box-radio-inner">
          <input type="checkbox" name="kinmu[]" value="天王寺" id="kinmu6">
          <label for="kinmu6"> 天王寺</label>
        </div>
      </div>
    </div>









    <div class="form-question form-box">
      <label class="tab title">ご質問など</label>
      <textarea class="tab" name="text" cols="" rows="15"></textarea>
    </div>

    <div class="form-submit">
      <input type="submit" class="submit-btn" id="submit" value="送信">
      <input type="hidden" name="token" value="<?= $token ?>">
    </div>
  </form>
</div>


<div id="form-load">
  <div class="load">
  </div>
  <div class="load1">
    <br>
    <div class="loader"></div>
    <p>送信中</p>
  </div>
</div>

<!-- 結果メッセージ -->
<div id="result"></div><!-- /#result -->
<script src="https://www.google.com/recaptcha/api.js?render=6Ld1BT4kAAAAAKgrkcfnuJvMK2lwQZUt4CqJnbkv"></script>
<script type="module" src="php_mailer/js/form.js"></script>