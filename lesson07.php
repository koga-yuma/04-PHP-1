<?php
// 配列に要素を格納
$countries = array("日本", "アメリカ", "イギリス", "フランス");

// 配列の各要素を順番に出力
foreach ($countries as $index => $country) {
    echo "$index - {$country}\n";
}
?>