<?php
// 連想配列に国と都市を格納
$capitalCities = array(
    "日本" => "東京",
    "アメリカ" => "ワシントン",
    "イギリス" => "ロンドン",
    "フランス" => "パリ"
);

// 連想配列の各要素を順番に出力
foreach ($capitalCities as $country => $city) {
    echo "{$country}の首都は{$city}\n";
}
?>