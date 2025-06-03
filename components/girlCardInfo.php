<div class="girlCardInfo">
  <?php if ($template !== 'cast') : ?>
    <p class="girlCardInfo__time">
      <span class="girlCardInfo__time--icon">
        <img src="<?php echo $path; ?>assets/img/icon-time.svg" alt="">
      </span>
      <span class="girlCardInfo__time--text">
        <?php echo $girl['startTime']; ?>〜<?php echo $girl['endTime']; ?>
      </span>
    </p>
  <?php endif; ?>
  <div class="girlCardInfo__image <?php if ($girl['beginner'] == 'true') : echo "new"; endif; ?>">
    <img src="./assets/img/cast/<?php echo $girl['img']; ?>.jpg" alt="女性の画像">
  </div>
  <p class="girlCardInfo__fee">
    <span>+</span>
    <span><?php echo $girl['fee']; ?></span>
    <span>円</span>
  </p>
  <p class="girlCardInfo__name">
    <span><?php echo $girl['name']; ?></span>
    <span>(<?php echo $girl['age']; ?>)</span>
  </p>
  <p class="girlCardInfo__size">
    <span>T<?php echo $girl['tall']; ?></span>
    <span>B<?php echo $girl['bust']; ?>-<?php echo $girl['cup']; ?></span>
    <span>W<?php echo $girl['waist']; ?></span>
    <span>H<?php echo $girl['hip']; ?></span>
  </p>
</div>