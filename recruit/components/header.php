<header class="header" id="header">
  <div class="header__inner pc-container tab-container">
    <h1 class="header__inner--logo headerLogo">
      <a href="<?php echo $path; ?>">
        <img src="<?php echo $path; ?>assets/img/logo.webp" alt="">
      </a>
    </h1>
    <div class="header__inner--nav noTab">
      <?php include $path . 'components/navList.php'; ?>
    </div>
  </div>
  <nav class="hamNav tab" id="hamNavTop">
    <?php include $path . 'components/navList.php'; ?>
  </nav>
</header>