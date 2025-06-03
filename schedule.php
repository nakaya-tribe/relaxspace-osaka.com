<?php include $path . 'components/head.php'; ?>
<?php
$path = './';
$pageTitle = '出勤スケジュール';
$template = 'schedule';
include $path . 'components/header.php';
?>
<main class="schedule">
  <section class="section bgPink">
    <div class="section__title">
      <h2 class="section__title--text">
        <?php echo $pageTitle; ?>
      </h2>
      <div class="section__title--deco">
        <img src="<?php echo $path; ?>assets/img/deco-heart.png" alt="">
      </div>
    </div>
    <div class="section__content schedule__content pc-container">
      <div class="schedule__days">
        <ul class="schedule__days--list tab-container">
          <?php include $path . 'components/scheduleTab.php'; ?>
        </ul>
      </div>
      <?php include $path . 'components/girlList.php'; ?>
    </div>
    <div class="section__toTop tab">
      <a href="#header">TOPへ</a>
    </div>
  </section>
</main>
<?php include $path . 'components/footer.php'; ?>