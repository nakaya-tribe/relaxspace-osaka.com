<?php include $path . 'components/head.php'; ?>
<?php
$path = './';
$pageTitle = '女の子一覧';
$template = 'cast';
include $path . 'components/header.php';
?>
<main class="cast">
  <section class="section bgPink">
    <div class="section__title">
      <h2 class="section__title--text">
        <?php echo $pageTitle; ?>
      </h2>
      <div class="section__title--deco">
        <img src="<?php echo $path; ?>assets/img/deco-heart.png" alt="">
      </div>
    </div>
    <div class="section__content cast__content pc-container">
      <?php include $path . 'components/girlList.php'; ?>
      <?php include $path . 'components/girlPagination.php'; ?>
    </div>
    <div class="section__toTop tab">
      <a href="#header">TOPへ</a>
    </div>
  </section>
</main>
<?php include $path . 'components/footer.php'; ?>