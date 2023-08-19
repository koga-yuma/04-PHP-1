<?php
date_default_timezone_set('Asia/Tokyo'); // タイムゾーンを設定

// 現在日時
$now = date('Y年m月d日 H時i分s秒');

// 現在日時から3日後
$threeDaysLater = date('Y年m月d日 H時i分s秒', strtotime('+3 days'));

// 現在日時から12時間前
$twelveHoursAgo = date('Y年m月d日 H時i分s秒', strtotime('-12 hours'));

// 2020年元旦から現在までの経過日数
$startDate = new DateTime('2020-01-01');
$endDate = new DateTime('now');
$daysPassed = $startDate->diff($endDate)->days;

// 出力
echo "{$now}\n";
echo "{$threeDaysLater}\n";
echo "{$twelveHoursAgo}\n";
echo "{$daysPassed}日\n";
?>