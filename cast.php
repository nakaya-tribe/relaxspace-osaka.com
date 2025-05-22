<!DOCTYPE html>
<html lang="ja">
	
<?php include("header.php");?>

<div class="main">
	<div id="cont_wrapper">
		<div class="title"><img src="./images/cast_tit.png" alt="キャスト紹介"></div>
		<div id="wrap_cast">
		<?php foreach($all as $value): ?>
		<div class="cast">
			<div class="cast_logo"><img src="images/cast_profile_tit.png" alt="リラックススペース"></div>
			<div class="photo"><img src="./images/girl_cast/cast<?php echo $value['pic'];?>.jpg" alt="キャスト"></div>
			<div class="cast_name">
				<p><?php echo $value['name']."(".$value['age'].")";?></p>
			</div>
			<div class="bodysize">
				<p><?php echo $value['height']." ".$value['size'];?></p>
			</div>
		</div>
		<?php endforeach; ?>
		</div>
		
	</div>
</div>

<?php include("footer.php");?>
