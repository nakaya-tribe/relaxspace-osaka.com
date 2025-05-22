<?php include("header.php");?>

<div id="contents_wrapper">
  <div id="content_area">
    <div class="event">
      <div class="event_title"><img src="./images/top_tit_event.png" alt="イベント"></div>
      <div class="event_banner"><a href="./"><img src="./images/top_event.png" alt="イベント内容"></a>
      </div>
      <div class="event_line"><img src="./images/top_event_under.png" alt="イベント"></div>
    </div>

    <div class="new">
      <div class="title"><img src="./images/top_tit_new.png" alt="新人情報"></div>
      <ul class="wrap_top_cast">
        <?php $i=0; foreach($top as $value): ?>
        <?php if($i>=4) { break; }; $i++; ?>
        <li class="top_cast">
          <div class="cast_title"><img src="./images/common_cast_title.png" alt="relaxspace"></div>
          <div class="top_photo"><img src="../images/girl_cast/cast<?php echo $value['pic']; ?>.jpg" alt="キャスト写真"></div>
          <p class="top_name"><?php echo $value['name']."(".$value['age'].")";?></p>
          <p class="top_bodysize">T<?php echo $value['height']." ".$value['size'];?></p>
        </li>
        <?php endforeach; ?>
      </ul>
      <div class="btn_more">
        <a href="cast.php"><img src="./images/top_btn_today_work_more.png" alt="キャスト情報をもっと見る"></a>
      </div>
    </div><!-- new -->


    <div class="today_work">
      <div class="title"><img src="./images/top_tit_today_work.png" alt="本日の出勤"></div>
      <ul class="wrap_top_cast">
        <?php $i=0; foreach($top as $value): ?>
        <?php if($i>=4) { break; }; $i++; ?>
        <li class="top_cast">
          <div class="cast_title"><img src="./images/common_cast_title.png" alt="relaxspace">
          </div>
          <div class="top_photo"><img src="../images/girl_cast/cast<?php echo $value['pic']; ?>.jpg" alt="キャスト写真"></div>
          <p class="top_name"><?php echo $value['name']."(".$value['age'].")";?></p>
          <p class="top_bodysize">T<?php echo $value['height']." ".$value['size'];?></p>
        </li>
        <?php endforeach; ?>
      </ul><!-- wrap_top_cast -->

      <div class="btn_more">
        <a href="cast.php"><img src="./images/top_btn_today_work_more.png" alt="出勤情報をもっと見る"></a>
      </div>
    </div><!-- today_work -->

  </div><!-- #content_area -->
</div><!-- #contents_wrapper -->

<?php include("footer.php");?>