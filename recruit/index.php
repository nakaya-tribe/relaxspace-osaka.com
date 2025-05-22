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
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="description" content="女の子の為の大阪の高収入求人と言えばリラックススペース">
  <link rel="stylesheet" href="main.css">
  <link rel="shortcut icon" href="../favicons/favicon.ico" />
  <link rel="apple-touch-icon" sizes="180x180" href="../favicons/apple-touch-icon.png">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="bundle.js"></script>
  <title>高収入求人 リラックススペース</title>
</head>

<body>
  <div class="wrapper">


    <header class="g-header">
      <div class="mainvisual">
        <h1>
          <picture>
            <source media="(max-width: 440px)" srcset="img/logo_sp.png" alt="大阪の完全素人恋人系オナクラ リラックススペース">
            <img src="img/logo.png" alt="リラックススペース">
          </picture>
          <a href="img/qrcode.jpg" class="line-qr" target="_blank"></a>
        </h1>
      </div>
    </header>


    <nav class="g-nav">
      <h2>ナビゲーション</h2>
      <button id="menu-button">
        <span></span>
      </button>
      <ul class="inner">
        <li><a href="#about">恋人オナクラとは</a></li>
        <li><a href="#courseback">コースバック料金</a></li>
        <li><a href="#works">お仕事内容</a></li>
        <li><a href="#salary">給与シミュレーション</a></li>
        <li><a href="#apply">応募する</a></li>
      </ul>
    </nav>


    <section id="about">
      <h2>リラックススペースについて</h2>
      <div class="about1 inner"><img src="img/about_girl.png" alt=""></div>
      <div class="about2 inner"><img src="img/about_what.png" alt=""></div>
      <div class="about3">
        <p>性病の心配＆リスク0！</p>
        <p>男性経験0でも大丈夫！</p>
        <p>生理中でも働けるからお給料も安定♪</p>
      </div>
      <div class="about4 inner">
        <picture>
          <source media="(max-width: 440px)" srcset="img/about_girl2_sp.png">
          <img src="img/about_girl2.png" alt="">
        </picture>
      </div>
      <div class="about-line"></div>
      <div class="about5">
        <picture class="inner">
          <source media="(max-width: 440px)" srcset="img/about_celebrate_sp.png">
          <img src="img/about_celebrate.png" alt="入店祝い金10万円">
        </picture>
      </div>
    </section>


    <section id="courseback">
      <h2><span>お給料</span></h2>
      <ul class="course-list">
        <li class="course">
          <div class="inner">
            <h3><img src="img/course_name1.png" alt="エッチな相談コース"><span>お客様のオナニーを見て囁くだけ！！</span></h3>
            <p>お客様の悩みや苦労話、秘密の性癖のお話の相談相手になってあげるお仕事です。</p>
            <dl class="prices">
              <dt><em>40</em>分<br>コース</dt>
              <dd><em>￥4,000</em>円</dd>
              <dt><em>50</em>分<br>コース</dt>
              <dd><em>￥6,000</em>円</dd>
              <dt><em>70</em>分<br>コース</dt>
              <dd><em>￥10,000</em>円</dd>
            </dl>
          </div>
        </li>
        <li class="course">
          <div class="inner">
            <h3><img src="img/course_name2.png" alt="添い寝コース"><span>お客様と一緒に寝転んでお喋り&hearts;</span></h3>
            <p>添い寝しながらお客様と楽しくコミュニケーションをとってもらうお仕事です。</p>
            <dl class="prices">
              <dt><em>40</em>分<br>コース</dt>
              <dd><em>￥7,000</em>円</dd>
              <dt><em>50</em>分<br>コース</dt>
              <dd><em>￥9,000</em>円</dd>
              <dt><em>70</em>分<br>コース</dt>
              <dd><em>￥13,000</em>円</dd>
            </dl>
          </div>
        </li>
        <li class="course">
          <div class="inner">
            <h3><img src="img/course_name3.png" alt="お手伝いコース"><span>お客様のオナニーのお手伝い</span></h3>
            <p>お客様のオナニーを手コキでお手伝いしてあげるお仕事です。</p>
            <dl class="prices">
              <dt><em>40</em>分<br>コース</dt>
              <dd><em>￥8,000</em>円</dd>
              <dt><em>50</em>分<br>コース</dt>
              <dd><em>￥10,000</em>円</dd>
              <dt><em>70</em>分<br>コース</dt>
              <dd><em>￥14,000</em>円</dd>
            </dl>
          </div>
        </li>
        <li class="course">
          <div class="inner">
            <h3><img src="img/course_name4.png" alt="おでかけコース"><span>お客様とお外へデート♪</span></h3>
            <p>ホテルの外へ出て、お客様とデートをするお仕事となります。</p>
            <dl class="prices">
              <dt><em>120</em>分<br>コース</dt>
              <dd><em>￥25,000</em>円</dd>
              <dt><em>180</em>分<br>コース</dt>
              <dd><em>￥40,000</em>円</dd>
            </dl>
          </div>
        </li>
      </ul>
      <p class="inner">
        <img src="img/text_course.png" alt="全てをこなさなくてもOK!!自分が出来るコースのみで構いません♪">
      </p>
    </section>


    <section id="works">
      <h2><span>お仕事内容</span></h2>
      <div class="work1 inner">
        <div class="work-text">
          <h3><em>超ソフト</em>なサービスをするだけ</h3>
          <p>
            他のオナクラ店の場合、ソフトなコースももちろんあるけど、ヘルスと似たようなコースもあるから、そういうハードなサービスをしないと、高いお給料が貰えないかもしれない・・・。
            当店はそんな心配は一切不要です♪ 普通の女の子が彼女みたいに接してくれる所が当店のポイントです！
          </p>
        </div>
        <figure class="girl"><img src="img/work_girl1.png" alt=""></figure>
      </div>

      <div class="work2 inner">
        <div class="work-text">
          <h3>「<em>脱</em>ぎません」「<em>舐</em>めません」「<em>触</em>られません」</h3>
          <p>
            当店のコースにはオプションは一切ございません。他店より気軽にお仕事ができる環境をご用意しております。
          </p>
        </div>
        <figure class="girl"><img src="img/work_girl2.png" alt="女性2"></figure>
      </div>

      <div class="work3 inner">
        <div class="work-text">
          <h3>自身のキャラこそが<em>稼げる源</em></h3>
          <p>
            深く考える必要はございません。生まれもった個性こそが、あなた自身なのです。その自分自身を隠さずに
            お客様と触れ合う事こそがリピートにも繋がっていき、安定した高収入を手にする事が早くなります。
          </p>
        </div>
        <figure class="girl"><img src="img/work_girl3.png" alt="女性3"></figure>
      </div>
    </section>


    <section id="salary">
      <h2><span>お給料例</span></h2>
      <div class="salary-sample inner">
        <ul>
          <li><img src="img/salary_sample1.png" alt=""></li>
          <li><img src="img/salary_sample2.png" alt=""></li>
          <li><img src="img/salary_sample3.png" alt=""></li>
          <li><img src="img/salary_sample4.png" alt=""></li>
        </ul>
        <div class="worry-about">
          <h4>可能なコースが多いほど稼ぎやすい!!</h4>
          <p>お客さんが一人もつかなかったら<em>0</em>円なの・・・？</p>
          <p>心配無用!!当店は女の子が<span><em>0</em>円で帰る事はございません。</span></p>
        </div>
      </div>
      <div class="guarantee inner">
        <h3><img src="img/text_guarantee.png" alt="待機保証制度アリ"></h3>
        <dl class="value">
          <dt><em>4</em>時間待機</dt>
          <dd><img src="img/text_guarantee_val1.png" alt="2万円～4万円"></dd>
          <dt><em>6</em>時間待機</dt>
          <dd><img src="img/text_guarantee_val2.png" alt="4万円～6万円"></dd>
          <dt><em>8</em>時間待機</dt>
          <dd><img src="img/text_guarantee_val3.png" alt="6万円～8万円"></dd>
        </dl>
      </div>
      <div class="treatments inner">
        <h3><img src="img/text_treatments.png" alt="理想の高待遇"></h3>
        <ul class="treatment-list">
          <li>個室待機</li>
          <li>完全送迎</li>
          <li>高額保証あり</li>
          <li>罰金・ノルマなし</li>
          <li>完全日払い制</li>
          <li>体験入店あり</li>
          <li>完全自由出勤</li>
          <li>入店祝い金</li>
          <li>いきなり卒業OK</li>
          <li>掛け持ち大歓迎</li>
          <li>託児所完備</li>
          <li>即日入寮OK</li>
        </ul>
        <ul class="pleasures">
          <li>
            <picture>
              <source media="(max-width: 440px)" srcset="img/points_security_sp.png">
              <img src="img/points_security.png" alt="">
            </picture>
          </li>
          <li>
            <picture>
              <source media="(max-width: 440px)" srcset="img/points_private_sp.png">
              <img src="img/points_private.png" alt="">
            </picture>
          </li>
          <li>
            <picture>
              <source media="(max-width: 440px)" srcset="img/points_transfer_sp.png">
              <img src="img/points_transfer.png" alt="">
            </picture>
          </li>
        </ul>
      </div>
    </section>


    <section id="apply">
      <h2><span>応募はこちら</span></h2>

      <?php include $path . 'php_mailer/form.php';?>
      <!-- <div class="link-banner">
        <a href="https://happyhellowork.com/kansai/osakaetc/rank.php?s=9" target="_blank" rel="noopener">
          <img src="img/osketc.gif" alt="ハッピーハローワーク">
        </a>
        <a href="https://qzin.jp" target="_blank" rel="noopener">
          <img src="img/banner-vanilla.gif" alt="バニラ求人">
        </a>
        <a href="https://www.15navi.com/osaka/ma310/aa201/shop18150/?ohp=y" target="_blank" rel="noopener">
          <img src="img/banner-ichigo.png" alt="いちごなび">
        </a>
        <a href="https://q-pri.com/shop_list/area/102/103" target="_blank" rel="noopener">
          <img src="img/banner-qpri.png" alt="Qプリ">
        </a>img/banner
        <a href="https://work-mikke.jp/" target="_blank">風俗求人【みっけ】で高収入バイト・稼げるお仕事探し！</a>
      </div> -->
      <div class="link-banner">
        <p>
          <a rel="nofollow" href="https://kansai.qzin.jp/relaxspace/?v=official" target="_blank"><img
              src="https://ad.qzin.jp/img/vanilla468-60.gif" width="468" alt="リラックススペースで稼ぐならバニラ求人"></a>

          <a href="https://q-pri.com/shop_list/area/102/103" target="_blank" rel="noopener"><img
              src="img/banner/q-puri200x40.png" alt="Qプリ"></a>
          <a href="https://q-pri.com/shop_list/area/102/103" target="_blank" rel="noopener"><img
              src="img/banner/q-puri468x60.png" alt="Qプリ"></a>
          <a href="https://q-pri.com/shop_list/area/102/103" target="_blank" rel="noopener"><img
              src="img/banner/q-puri640x100.png" alt="Qプリ"></a>
          <a href="https://www.15navi.com/osaka/" target="_blank" rel="noopener"><img src="img/banner/ichigo-right.png"
              alt="いちごなび"></a>
          <a href="https://www.15navi.com/osaka/ma310/aa201/" target="_blank" rel="noopener"><img
              src="img/banner/ichigo-left.png" alt="いちごなび"></a>
          <a href="https://work-mikke.jp/" target="_blank" rel="noopener"><img src="img/banner/mikke.jpg" alt="みっけ"></a>
          <a href="https://www.fucolle.com/kansai/" target="_blank" rel="noopener"><img src="img/banner/fukore.gif"
              alt="フーコレ関西"></a>
          <a href="https://fujoho.jp/" target="_blank" rel="noopener"><img src="img/banner/kutikomi.gif"
              alt="口コミ情報局"></a>
          <a href="https://www.tekoki-no1.com/" target="_blank" rel="noopener"><img src="img/banner/tekoki.gif"
              alt="手コキが一番"></a>
          <a href="http://u-10000.com" target="_blank" rel="noopener"><img src="img/banner/yukiti.gif" alt="諭吉で風俗"></a>
        </p>
      </div>
    </section>


    <nav class="f-nav">
      <ul>
        <li><a href="#about">恋人オナクラとは</a></li>
        <li><a href="#courseback">コースバック料金</a></li>
        <li><a href="#works">お仕事内容</a></li>
        <li><a href="#salary">給与シミュレーション</a></li>
        <li><a href="#apply">応募する</a></li>
      </ul>
    </nav>


    <footer class="footer">
      <div class="footer-flex inner">
        <h3 class="footer-logo"><img src="img/footer_logo.png" alt="大阪の完全素人恋人系オナクラ リラックススペース 24時間受付中"></h3>
        <address class="footer-link">
          <a href="tel:0120946174">TEL:0120-946-174</a>
          <a href="https://line.me/ti/p/DYGA9ZHcLK">LINE ID:relaxyz123</a>
        </address>
      </div>
      <figure class="footer-banner">
        <a href="../index.php" target="_blank"><img src="img/footer_sales.png" alt="営業サイトバナー"></a>
      </figure>
      <small class="copyright">&copy;大阪の完全素人恋人系オナクラ リラックススペース</small>
    </footer>

    <nav class="b-nav">
      <ul class="wrapper">
        <li><a href="tel:0120946174"><img src="img/icon_tel_w.png" alt="電話応募">電話応募</a></li>
        <li><a href="https://line.me/ti/p/DYGA9ZHcLK"><img src="img/icon_line_w.png" alt="LINE応募">LINE応募</a></li>
      </ul>
    </nav>
  </div>
</body>

</html>