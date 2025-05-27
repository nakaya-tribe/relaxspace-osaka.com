<section class="salary" id="salary">
  <div class="salary__inner pc-container tab-container">

    <div class="decoStar decoStar10"></div>
    <h2 class="sectionTitle">お仕事・お給料について</h2>
    <div class="sectionLine">
      <img src="<?php echo $path; ?>assets/img/sectionTitle_line.png" alt="">
    </div>
    <div class="decoStar decoStar11"></div>
    <div class="decoStar decoStar12"></div>
    <div class="decoStar decoStar19 tab"></div>

    <?php
    $courses = [
      [
        'title' => 'エッチな相談コース',
        'number' => '1',
        'desc' => '見ているだけのコース！<br>お客様の悩みや苦労話、秘密の性癖の<br>お話の相談相手になってあげるお仕事です。'
      ],
      [
        'title' => '添い寝コース',
        'number' => '2',
        'desc' => '添い寝しながらお客様と楽しく<br>コミュニケーションをとってもらうお仕事です。'
      ],
      [
        'title' => 'お手伝いコース',
        'number' => '3',
        'desc' => 'お客様のオナニーを手でお手伝い<br>してあげるお仕事です。'
      ],
      [
        'title' => 'おでかけコース',
        'number' => '4',
        'desc' => 'お客様とお外へデート♪<br>ホテルの外へ出てお客様と<br>デートをするお仕事となります。'
      ],
    ];

    foreach ($courses as $course): ?>
      <section class="salary__section salary__section0<?php echo $course['number']; ?>">
        <h3 class="salary__section--title">
          <img src="<?php echo $path; ?>assets/img/courseTitle0<?php echo $course['number']; ?>.png" alt="<?php echo $course['title']; ?>">
        </h3>
        <p class="salary__section--desc">
          <?php echo $course['desc']; ?>
        </p>
        <div class="salary__section--box">
          <img src="<?php echo $path; ?>assets/img/salaryPrice0<?php echo $course['number']; ?>.png" alt="">
        </div>
      </section>
    <?php endforeach; ?>

    <div class="decoStar decoStar13 noTab"></div>
    <p class="salary__text">
      全てをこなさなくてもOK!<br>
      自分ができるコースのみで構いません♪
    </p>
    <div class="decoStar decoStar14"></div>

  </div>
</section>