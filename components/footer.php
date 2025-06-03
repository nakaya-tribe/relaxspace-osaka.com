<footer class="footer">
  <div class="footer__container pc-container">
    <div class="footer__top">
      <div class="footer__top--logo noTab">
        <a class="img_res" href="<?php echo $path; ?>">
          <img src="<?php echo $path; ?>assets/img/logo_pc.png" alt="完全素人×恋人オナクラ RelaxSpace">
        </a>
      </div>
      <div class="footer__top--tel noTab">
        <?php include $path . 'components/shopInfo.php'; ?>
      </div>
    </div>
    <nav class="footer__nav noTab">
      <?php include $path . 'components/navList.php'; ?>
    </nav>
    <?php include $path . 'components/footerBanner.php'; ?>
    <div class="footer__copyright">
      <small>Copyright © リラックススペース 2025 All right reserved.</small>
    </div>
  </div>
</footer>
<div class="tab">
  <?php include $path . 'components/fixedBottom.php'; ?>
</div>

<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
<script type="text/javascript" src="<?php echo $path; ?>/assets/js/responsive.js"></script>
<script type="text/javascript" src="<?php echo $path; ?>/assets/js/hamburger.js"></script>
<script type="text/javascript" src="<?php echo $path; ?>/assets/js/slide.js"></script>
<script type="text/javascript" src="<?php echo $path; ?>/assets/js/index.js"></script>
<script type="text/javascript" src="<?php echo $path; ?>/assets/js/date.js"></script>

</body>

</html>