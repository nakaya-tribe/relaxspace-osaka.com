<!DOCTYPE html>
<html lang="ja">

<?php include("header.php");?>

<div class="main">
<div id="cont_wrapper">
	<div class="title"><img src="./images/schedule_tit.jpg" alt="週刊出勤予定"></div>
	<div class="wrap_schedule_navi">
		<ul class="schedule_day">
			<?php for($i=0; $i<7; $i++):?>
			<li<?php if($day == $i ){ echo ' class="active"'; };?>>
				<a href="schedule.php?day=<?php echo $i;?>"><?php echo date('n月j日', strtotime("+".$i."day")); echo $week[date('w', strtotime("+".$i."day"))];?></a>
			</li>
			<?php endfor;?>
		</ul>

	<?php
		 $detect= $day + date('w');
		 if($detect>=7){ $detect = $detect - 7;}
	?>

		<div id="wrap_cast">				
			<?php foreach(${'day'.$detect} as $value):?>
				<div class="cast">
					<div class="cast_logo"><img src="images/cast_profile_tit.png" alt="リラックススペース"></div>
					<div class="photo"><img src="./images/girl_cast/cast<?php echo $value['pic']; ?>.jpg" alt="キャスト"></div>
					<div class="cast_name">
						<p><?php echo $value['name']."(".$value['age'].")";?></p>
					</div>
					<div class="bodysize">
						<p><?php echo $value['height']." ".$value['size'];?></p>
					</div>
					<div class="schedule_work"><p><?php echo $value['time'];?></p></div>
				</div>
			<?php endforeach;?>
		</div>
		
	</div>
	
</div>

<?php include("footer.php");?>