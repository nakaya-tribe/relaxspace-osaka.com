<!DOCTYPE html>
<html lang="ja">

<?php include("header.php");?>

<div class="main">
	<div id="cont_wrapper">
		<div id="content_area">
			<main id="main_cont">
				<section id="events" class="topics_area container">
					<dl class="topics_box">
						<dt class="tit_com tit_text_non events">イベント</dt>
						<a href="./"><img src="./images/top_event.png" alt="イベント内容"></a>
					</dl>
				</section>
				
				<section id="newface" class="sec_area container">
					<h2 class="tit_com tit_text_non newface tit_area">新人情報</h2>
					<div class="w95p_pc center">
						<ul class="list_box col_pc4_sp2">
							<?php $i=0; foreach($newface as $value): ?>
							<?php if($i>=4) { break; }; $i++; ?>
							<li class="list_com item">
								<p class="newface_day">
									<?php echo $value['name']."(".$value['age'].")";?>
								<div class="garl_img"><img src="./images/girl_cast/cast<?php echo $value['pic']; ?>.jpg" alt="キャスト"></div>
								<p class="girl_3size">T
									<?php echo $value['height']." ".$value['size'];?>
								</p>
							</li>
							<?php endforeach; ?>
						</ul>
						<div class="btn01 dt center mt20 hov">
							<a href="cast.php" class="db a_txt color_wt tdn">キャスト情報をもっと見る</a>
						</div>
					</div>
				</section>
				
				<section id="schedule" class="sec_area container">
					<h2 class="tit_com tit_text_non schedule tit_area">本日の出勤</h2>
					<div class="w95p_pc center">
						<ul class="list_box col_pc4_sp2">
							<?php $i=0; foreach($top as $value): ?>
							<?php if($i>=4) { break; }; $i++; ?>
							<li class="list_com item">
								<p class="newface_day">
									<?php echo $value['name']."(".$value['age'].")";?>
								</p>
								<div class="garl_img"><img src="./images/girl_cast/cast<?php echo $value['pic']; ?>.jpg" alt=""></div>
								<p class="girl_3size">
									<?php echo $value['time'];?>
								</p>
							</li>
							<?php endforeach; ?>
						</ul>
						<div class="btn01 dt center mt20 hov">
							<a href="schedule.php" class="db a_txt color_wt tdn">出勤情報をもっと見る</a>
						</div>
					</div>
				</section>
				
			</main>
		</div>
	</div>
</div>

<?php include("footer.php");?>