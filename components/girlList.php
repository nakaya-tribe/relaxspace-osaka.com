<?php
require(dirname(__FILE__) . "/../data/girlData.php");
$keys = array_keys($girls);
$perPage = ($template === 'cast') ? 12 : count($keys);
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$start = ($page - 1) * $perPage;
$displayKeys = ($template === 'cast') ? array_slice($keys, $start, $perPage) : $keys;
?>

<?php
// 勤務時間でソートする関数（9時区切り）
function sortByTime($a, $b)
{
  $startA = convertTimeToMinutes($a['startTime']);
  $startB = convertTimeToMinutes($b['startTime']);

  // 9時以前の時間は24時間足して翌日の時間として扱う
  if ($startA < 9 * 60) {
    $startA += 24 * 60;
  }
  if ($startB < 9 * 60) {
    $startB += 24 * 60;
  }
  // startTime が異なる場合はそれでソート
  if ($startA !== $startB) {
    return $startA - $startB;
  }

  // startTime が同じなら endTime で比較
  $endA = convertTimeToMinutes($a['endTime']);
  $endB = convertTimeToMinutes($b['endTime']);

  if ($endA < 9 * 60) {
    $endA += 24 * 60;
  }
  if ($endB < 9 * 60) {
    $endB += 24 * 60;
  }
  return $endA - $endB;
}

// 時間を分単位に変換する関数
function convertTimeToMinutes($time)
{
  if (!preg_match('/^\d{1,2}:\d{2}$/', $time)) {
    return 0; // 無効な時間形式の場合は0を返す
  }
  list($hours, $minutes) = explode(':', $time);
  return $hours * 60 + $minutes;
}

// templeteがgirlでない場合のみソートを実行
if ($template !== 'cast') {
  // girls配列を勤務時間でソート
  usort($girls, 'sortByTime');
}
?>

<ul class="girlList grid tab-container">
  <?php
  foreach ($displayKeys as $key) :
    $girl = $girls[$key];
    include $path . 'components/girlCard.php';
  endforeach;
  ?>
</ul>