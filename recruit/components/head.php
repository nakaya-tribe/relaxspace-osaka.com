<?php
$path = './';
$url = 'https://relaxspace.tribe-webtest.xyz/recruit/';

session_start();
header('X-Frame-Options: DENY');
$token = sha1(uniqid(rand(), true));
$_SESSION['key'] = $token;

$RECAPTUER = $_ENV["V3_SECRETKEY"];
$message = null;

if (isset($_REQUEST["recaptchaToken"]) == true)  /* 送信ボタンが押された ? */ {
  /** トークンチェック */
  $token = $_REQUEST["recaptchaToken"];

  if (token_chk($token) == true)  /* トークンチェックOK */ {
    $message = "<p class=\"OK\">reCAPTCHAチェックOKです。</p>";
  } else {
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

  if ($chk->success == true)  /* トークンエラー */ {
    $sts = true;
  }

  /** 処理終了 */
  return $sts;
}

?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <title>リラックススペース求人サイト</title>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="女の子の為の大阪の高収入求人と言えばリラックススペース">
  <meta property="og:locale" content="ja_JP" />
  <meta property="og:type" content="website" />
  <meta property="og:title" content="リラックススペース求人サイト" />
  <meta property="og:description"
    content="女の子の為の大阪の高収入求人と言えばリラックススペース" />
  <meta property="og:url" content="<?php echo $url; ?>" />
  <meta property="og:site_name" content="リラックススペース求人サイト" />
  <meta property="og:image" content="<?php echo $url; ?>assets/img/ogp.webp" />
  <meta property="og:image:width" content="1200" />
  <meta property="og:image:height" content="630" />
  <meta name="twitter:card" content="summary_large_image" />

  <link rel="stylesheet" href="<?php echo $path; ?>assets/css/style.css">
  <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
  <link rel="icon" href="<?php echo $path; ?>assets/img/favicon.ico" />

  <!-- Googleフォント -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&family=Noto+Serif+JP:wght@200..900&family=Sawarabi+Gothic&family=Zen+Kaku+Gothic+Antique:wght@400;700&family=Zen+Maru+Gothic&display=swap" rel="stylesheet">

  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-12LDMJHH4Q"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());
    gtag('config', 'G-12LDMJHH4Q');
  </script>

  <!-- Adobeフォント -->
  <script>
    (function(d) {
      var config = {
          kitId: 'dzr3icb',
          scriptTimeout: 3000,
          async: true
        },
        h = d.documentElement,
        t = setTimeout(function() {
          h.className = h.className.replace(/\bwf-loading\b/g, "") + " wf-inactive";
        }, config.scriptTimeout),
        tk = d.createElement("script"),
        f = false,
        s = d.getElementsByTagName("script")[0],
        a;
      h.className += " wf-loading";
      tk.src = 'https://use.typekit.net/' + config.kitId + '.js';
      tk.async = true;
      tk.onload = tk.onreadystatechange = function() {
        a = this.readyState;
        if (f || a && a != "complete" && a != "loaded") return;
        f = true;
        clearTimeout(t);
        try {
          Typekit.load(config)
        } catch (e) {}
      };
      s.parentNode.insertBefore(tk, s)
    })(document);
  </script>
</head>

<body>