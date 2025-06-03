<?php include $path . 'components/head.php'; ?>
<?php
$path = './';
$pageTitle = 'システム料金';
$template = 'system';
include $path . 'components/header.php';
?>
<main class="system">
  <section class="section bgPink">
    <div class="section__title bgOrange">
      <h2 class="section__title--text">
        <?php echo $pageTitle; ?>
      </h2>
      <div class="section__title--deco">
        <img src="<?php echo $path; ?>assets/img/deco-heart.png" alt="">
      </div>
    </div>
    <div class="section__content pc-container">
      <ul class="system__top">
        <li class="system__top--info">
          <span>入会金</span>
          <span>1,000円</span>
        </li>
        <li class="system__top--info">
          <span>指名料</span>
          <span>1,000円〜5,000円</span>
        </li>
        <li class="system__top--info">
          <span>本指名料</span>
          <span>2,000円</span>
        </li>
      </ul>
      <?php include $path . 'components/systemSection.php'; ?>
      <div class="system__card">
        <ul class="system__card--list">
          <li>
            <img src="<?php echo $path; ?>assets/img/logo-card01.jpg" alt="visa">
          </li>
          <li>
            <img src="<?php echo $path; ?>assets/img/logo-card02.jpg" alt="jcb">
          </li>
          <li>
            <img src="<?php echo $path; ?>assets/img/logo-card03.jpg" alt="mastercard">
          </li>
          <li>
            <img src="<?php echo $path; ?>assets/img/logo-card04.jpg" alt="american express">
          </li>
        </ul>
        <p class="system__card--text">各種カードOK</p>
      </div>
      <div class="system__attention">
        <p class="system__attention--title">注意事項</p>
        <ul class="system__attention--list">
          <li>当店は無店舗型風俗特殊営業届出済店です。</li>
          <li>お客様に安心してご利用いただけるよう親切かつ健全、安全な営業を<br class="tab">心がけております。</li>
          <li>従って以下の注意事項、禁止事項をお守り頂けないお客様のご利用は<br class="tab">ご遠慮願います。</li>
          <li>18歳未満の方（高校生の方）本番行為の強要、交渉、行為、<br class="tab">又それに準ずる発言。</li>
          <li>サービス内容以外の強要。<br class="tab">（警察に被害届を出し、しかるべき対応をします。）</li>
          <li>薬物、ドラッグそれらに類する物の服用、所持、使用されている方、<br class="tab">使用する行為。</li>
          <li>同業者、スカウト及びスカウトに準ずる者の<br class="tab">スカウト行為や発言等（罰金）</li>
          <li>コンパニオンへの暴力行為、また嫌がる行為。</li>
          <li>ビデオカメラ、デジタルカメラ、カメラ付携帯などの機器を使っての<br class="tab">撮影、盗聴、盗撮行為。</li>
          <li>不衛生な場所及びお風呂、シャワーを利用できないお部屋でのご利用。</li>
          <li>コンパニオンへのストーカー行為、若しくはそれに準ずる行為。</li>
          <li>当店を媒介としないコンパニオンへの勧誘、お誘い。</li>
          <li>性病、若しくはそう思われる方のご利用。</li>
          <li>外国人、泥酔者、暴力団関係者、またはそれに準ずる方のご利用。</li>
          <li>ご理解いただけない方の今後のご利用はお断りさせて頂き、<br class="tab">損害賠償請求させていただきます。</li>
          <li>また、サービス中に上記事項が行われた場合は即サービスを<br class="tab">中止いたします。</li>
          <li>その際、料金の返金には一切応じられませんので予めご了承ください。</li>
        </ul>
      </div>
    </div>
    <div class="section__toTop tab">
      <a href="#header">TOPへ</a>
    </div>
  </section>
</main>
<?php include $path . 'components/footer.php'; ?>