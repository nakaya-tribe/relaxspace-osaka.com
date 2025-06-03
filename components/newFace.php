<?php
require_once(dirname(__FILE__) . '/../data/girlData.php');

$newGirls = array_filter($girls, function ($girl) {
  return !empty($girl['beginner']);
});
?>
<div class="swiper topNewSwiper">
  <div class="swiper-wrapper">
    <?php foreach ($newGirls as $index => $girl): ?>
      <div class="swiper-slide">
        <div class="girlCard topSlide">
          <div class="girlCard__frame">
            <div class="girlCardInfo__image <?php if ($girl['beginner'] == 'true') : echo "new";
                                            endif; ?>">
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
        </div>
      </div>
    <?php endforeach; ?>
  </div>
  <div class="swiper-pagination topNewSwiper-pagination"></div>
</div>