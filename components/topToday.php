<section class="box topToday">
  <div class="section__title">
    <h2 class="section__title--text">本日の出勤</h2>
    <div class="section__title--deco">
      <img src="<?php echo $path; ?>assets/img/deco-heart.png" alt="">
    </div>
  </div>
  <div class="section__content pc-container topToday__content">
    <?php include $path . 'components/girlList.php'; ?>
    <a class="topToday__content--link" href="<?php echo $path; ?>schedule.php">
      <span class="pc">全ての出勤をみる</span>
      <span class="tab">本日出勤セラピストはコチラから</span>
    </a>
  </div>
  <div class="section__toTop tab">
    <a href="#header">TOPへ</a>
  </div>
</section>