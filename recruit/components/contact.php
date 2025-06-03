<section class="contact pc-container" id="contact">
  <div class="contact__top tab-container">
    <p class="contact__top--message">
      お電話・LINE・フォームから<br>
      応募お待ちしております
    </p>
    <a class="contact__top--info" href="tel:0120-946-174">
      <img src="<?php echo $path; ?>assets/img/contactInfo.svg" alt="">
    </a>
    <p class="contact__top--text pc">友達追加からQRコードで登録</p>
    <div class="contact__top--line noTab">
      <div class="line-qr">
        <img src="<?php echo $path; ?>assets/img/line-qr.webp" alt="">
      </div>
      <p class="line-id">
        <span>LINE ID</span>
        <span>relaxyz123</span>
      </p>
    </div>
    <div class="contact__top--line tab">
      <a class="line-button" href="https://line.me/ti/p/DYGA9ZHcLK" target="_blank">
        <img src="<?php echo $path; ?>assets/img/line-button.webp" alt="">
      </a>
    </div>
  </div>
  <div class="tab-container">
    <h2 class="sectionTitle">応募フォーム</h2>
    <div class="sectionLine">
      <img src="<?php echo $path; ?>assets/img/sectionTitle_line.webp" alt="">
    </div>
  </div>
  <div class="contact__bottom">
    <?php include $path . 'php_mailer/form.php'; ?>
  </div>
</section>