<li class="girlCard fadeIn1 <?php if ($template !== 'cast') {
                              echo 'none';
                            } ?> <?php if ($girl['sun']) echo 'Sun'; ?>
      <?php if ($girl['mon']) echo 'Mon'; ?> <?php if ($girl['tue']) echo 'Tue'; ?> <?php if ($girl['wed']) echo 'Wed'; ?>
      <?php if ($girl['thu']) echo 'Thu'; ?> <?php if ($girl['fri']) echo 'Fri'; ?> <?php if ($girl['sat']) echo 'Sat'; ?>">

  <div class="girlCard__frame">
    <div class="girlCard__frame--flex">
      <?php include $path . 'components/girlCardInfo.php'; ?>
    </div>
  </div>
</li>