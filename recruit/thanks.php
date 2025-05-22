<?php

$url = 'http://relaxspace-osaka.com/';
$path = './';
  session_start();
  header('X-Frame-Options: DENY');
  $token = sha1(uniqid(rand(), true));
  $_SESSION['key'] = $token;  

  $RECAPTUER = $_ENV["V3_SECRETKEY"];
$message = null;

if (isset($_REQUEST["recaptchaToken"]) == true)	/* 送信ボタンが押された ? */
{
	/** トークンチェック */
	$token = $_REQUEST["recaptchaToken"];

	if (token_chk($token) == true)	/* トークンチェックOK */
	{
		$message = "<p class=\"OK\">reCAPTCHAチェックOKです。</p>";
	}
	else
	{
		$message = "<p class=\"NG\">reCAPTCHAチェックNGです。</p>";
	}
}

function token_chk($token)
{
	global $RECAPTUER;

	/** ステータス初期化 */
	$sts = false;

	$result = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=${RECAPTUER}&response=${token}");
	$chk = json_decode($result);

	if ($chk->success == true)	/* トークンエラー */
	{
		$sts = true;
	}

	/** 処理終了 */
	return $sts;
}

    ?>


<!DOCTYPE html>
<html lang="ja">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />
  <meta charset="UTF-8">
  <title>応募完了 | リラックススペース</title>
  <link rel="shortcut icon" href="" />
  <link rel="icon" type="image/vnd.microsoft.icon" href="" />
  <link rel="apple-touch-icon" href="" />
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400" rel="stylesheet" />
  <meta name="robots" content="noindex" />
  <!-- Google Tag Manager -->

  <!-- End Google Tag Manager -->


  <!-- Css Start -->
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/jquery.bxslider.min.css">
  <link rel="stylesheet" href="css/drawer.min.css">
  <link rel="stylesheet" href="css/base.css">
  <link rel="stylesheet" href="css/style.css">
  <!-- Css End -->

  <!-- JS Start -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/iScroll/5.2.0/iscroll.min.js"></script>
  <script src="js/scrollreveal.min.js"></script>
  <!-- JS End -->
</head>



<body class="drawer drawer--right">

  <div class="wrapper">

    <main role="main">

      <section class="thanks content_wrap">
        <h1>お問い合わせを送信完了しました。</h1>
        <p>
          お問い合わせありがとうございました。<br>
          内容を確認のうえ、担当者からご連絡させて頂きます。<br>
          しばらくお待ちください。
        </p>
        <div><a href="index.php">トップページに戻る</a></div>
      </section>


    </main>

    <footer>
      <small class="content_wrap">copyright (c) リラックススペース All rights reserved.</small>
    </footer>

  </div>

  <script>
  window.sr = ScrollReveal();
  sr.reveal('.animate1', {
    easing: 'ease',
    duration: 800,
    distance: '0',
    opacity: 0,
    scale: 1
  });
  sr.reveal('.animate2', {
    easing: 'ease',
    duration: 800,
    distance: '20px',
    opacity: 0,
    scale: 1
  });
  </script>

</body>

</html>