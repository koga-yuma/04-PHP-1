<?php
// 今日の日付を取得し、日本語の曜日に変換して表示
$today = date('Y年m月d日（', strtotime('today')) . getJapaneseDayOfWeek() . '曜日）';

// 出力
echo $today;

// 日本語の曜日を取得する関数
function getJapaneseDayOfWeek()
{
    $daysOfWeek = array("日", "月", "火", "水", "木", "金", "土");
    $currentDayOfWeek = date('w', strtotime('today')); // 0 (日曜日) から 6 (土曜日) まで
    return $daysOfWeek[$currentDayOfWeek];
}
?>