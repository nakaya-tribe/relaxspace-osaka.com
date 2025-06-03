<ul class="fixedBottom">
  <li class="fixedBottom__list">
    <a class="fixedBottom__list--button" href="tel:0120-946-147">
      <img class="icon-tel" src="<?php echo $path; ?>assets/img/icon_tel.svg" alt="">
      <span>電話</span>
    </a>
  </li>
  <li class="fixedBottom__list">
    <a class="fixedBottom__list--button" target="_blank" href="https://line.me/ti/p/FuJnVPIzfT">
      <img class="icon-line" src="<?php echo $path; ?>assets/img/icon_line.svg" alt="">
      <span>ライン</span>
    </a>
  </li>
  <li class="fixedBottom__list">
    <div class="fixedBottom__list--button hamButton">
      <div class="hamburger">
        <span></span>
        <span></span>
        <span></span>
      </div>
      <span>メニュー</span>
    </div>
  </li>
</ul>
<nav class="hamNav tab" id="hamNavBottom">
  <?php include $path . 'components/navList.php'; ?>
</nav>