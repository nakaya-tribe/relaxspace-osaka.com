<?php
// セッションキャッシュの取得
function get_cache($key) {
    return isset($_SESSION[$key]) ? $_SESSION[$key] : null;
}

// セッションキャッシュの保存
function set_cache($key, $value) {
    $_SESSION[$key] = $value;
}

// データをシャッフルしてキャッシュ（3時間ごと）
function get_or_set_shuffled_cache($cacheKey, $data) {
    $cacheTimeKey = $cacheKey . '_time';
    $cacheTime = isset($_SESSION[$cacheTimeKey]) ? $_SESSION[$cacheTimeKey] : 0;

    if (time() - $cacheTime > 10800) { // 3時間
        shuffle($data);
        set_cache($cacheKey, $data);
        $_SESSION[$cacheTimeKey] = time();
    }

    return get_cache($cacheKey);
}

// データの個数に合わせて、ランダムな日付リストを生成
function get_or_set_random_dates($dateKey, $count) {
    if (!isset($_SESSION[$dateKey])) {
        $baseTime = time();
        $dates = [];

        for ($i = 0; $i < $count; $i++) {
            if ($i === 0) {
                $dateTimestamp = $baseTime;
            } else {
                $dateTimestamp -= rand(1800, 7200); // 30分～2時間
            }
            $dates[] = date('Y年m月d日 H:i', $dateTimestamp);
        }

        $_SESSION[$dateKey] = $dates;
    }

    return $_SESSION[$dateKey];
}
