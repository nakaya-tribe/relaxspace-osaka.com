<?php include("header.php");?>

<div id="contents_wrapper">
  <div id="content_area">
    <div class="title"><img src="./images/schedule_tit.png.png" alt="週刊出勤予定"></div>
    <div class="schedule_day">
      <ul class="active">
        <?php for($i=0; $i<7; $i++):?>
        <li<?php if($day == $i ){ echo ' class="actives"'; };?>>
          <a
            href="schedule.php?day=<?php echo $i;?>"><?php echo date('n月j日', strtotime("+".$i."day")); echo $week[date('w', strtotime("+".$i."day"))];?></a>
          </li>
          <?php endfor;?>
      </ul>
    </div>

    <?php
           $detect= $day + date('w');
           if($detect>=7){ $detect = $detect - 7;}
        ?>

    <ul class="wrap_top_cast">
      <?php foreach(${'day'.$detect} as $value):?>
      <li class="top_cast">
        <!-- cssで背景画像 -->
        <div class="cast_title"><img src="./images/common_cast_title.png" alt="relaxspace">
        </div>
        <div class="top_photo"><img src="../images/girl_cast/cast<?php echo $value['pic']; ?>.jpg" alt="キャスト写真"></div>
        <p class="top_name"><?php echo $value['name']."（".$value['age']."）";?></p>
        <p class="top_bodysize">T<?php echo $value['height']." ".$value['size'];?></p>
        <p class="schedule_work"><?php echo $value['time'];?></p>
      </li><!-- 新人情報ひとくくり -->
      <?php endforeach;?>
    </ul>
  </div><!-- #content_area -->
</div><!-- #contents_wrapper -->

<?php include("footer.php");?>