<?php include("header.php");?>
<div id="contents_wrapper">
  <div id="content_area">
    <div class="title"><img src="./images/cats_tit.png" alt="キャスト紹介"></div>
    <ul class="wrap_top_cast">
      <?php foreach($all as $value): ?>
      <li class="top_cast">
        <div class="cast_title"><img src="./images/common_cast_title.png" alt="relaxspace"></div>
        <div class="top_photo"><img src="../images/girl_cast/cast<?php echo $value['pic']; ?>.jpg" alt="キャスト写真"></div>
        <p class="top_name"><?php echo $value['name']."(".$value['age'].")";?></p>
        <p class="top_bodysize">T<?php echo $value['height']." ".$value['size'];?></p>
      </li><!-- 新人情報ひとくくり -->
      <?php endforeach; ?>
    </ul><!-- wrap_top_cast -->
  </div><!-- #content_area -->
</div><!-- #contents_wrapper -->
<?php include("footer.php");?>