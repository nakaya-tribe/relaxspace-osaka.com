<?php include $path . 'components/head.php'; ?>
<?php
session_start();
$path = './';
$pageTitle = 'トップ';
$template = 'top';
include $path . 'components/header.php';
?>

<main class="top">
  <?php include $path . 'components/topBanner.php'; ?>
  <?php include $path . 'components/topNew.php'; ?>
  <?php include $path . 'components/topConcept.php'; ?>
  <?php include $path . 'components/topToday.php'; ?>
</main>

<?php include $path . 'components/footer.php'; ?>