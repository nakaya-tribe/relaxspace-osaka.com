<footer class="footer">
  <div class="pc-container">
    <div class="footer__top noTab">
      <?php include $path . 'components/navList.php'; ?>
    </div>
    <div class="footer__bottom">
      <div class="footer__bottom--logo">
        <a href="<?php echo $path; ?>">
          <img src="<?php echo $path; ?>assets/img/logo.png" alt="オナクラにイクならリラックススペース">
        </a>
      </div>
      <div class="footer__bottom--saleSite">
        <a href="./../" target="_blank">営業サイトはコチラから</a>
      </div>
    </div>
  </div>
  <div class="pc-container">
    <?php include $path . 'components/footerBanner.php'; ?>
    <p class="footer__copyright">Copyright © 2025 オナクラするなら「リラックススペース」 All right reserved</p>
  </div>
</footer>
<div class="tab">
  <?php include $path . 'components/fixedBottom.php'; ?>
</div>

<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
<script type="text/javascript" src="<?php echo $path; ?>assets/js/navList.js"></script>
<script type="text/javascript" src="<?php echo $path; ?>assets/js/responsive.js"></script>
<script type="text/javascript" src="<?php echo $path; ?>assets/js/hamburger.js"></script>
<script type="text/javascript" src="<?php echo $path; ?>assets/js/fix.js"></script>
<script type="text/javascript" src="<?php echo $path; ?>assets/js/fadein.js"></script>
<script type="text/javascript" src="<?php echo $path; ?>assets/js/index.js"></script>

</body>

</html>