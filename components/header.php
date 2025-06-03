<header class="header" id="header">
  <div class="headerTop">
    <div class="header__top pc-container">
      <h1 class="header__top--logo">
        <a href="<?php echo $path; ?>" class="img_res">
          <img src="<?php echo $path; ?>assets/img/logo_tab.png" alt="完全素人×恋人オナクラ RelaxSpace">
        </a>
      </h1>
      <div class="header__top--tel pc">
        <?php include $path . 'components/shopInfo.php'; ?>
      </div>
      <div class="header__top--ham tab">
        <div class="hamburger">
          <span></span>
          <span></span>
          <span></span>
          <span>MENU</span>
        </div>
      </div>
    </div>
  </div>
  <div class="header__nav">
    <nav class="pc">
      <?php include $path . 'components/navList.php'; ?>
    </nav>
    <nav class="hamNav tab">
      <?php include $path . 'components/navList.php'; ?>
    </nav>
  </div>
</header>
<div class="header-placeholder" style="display: none;"></div>