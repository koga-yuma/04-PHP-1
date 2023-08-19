<?php
// 連想配列のデータ
$data = [
    ['name' => '田中', 'age' => '25', 'gender' => '男'],
    ['name' => '鈴木', 'age' => '20', 'gender' => '男'],
    ['name' => '佐藤', 'age' => '23', 'gender' => '女']
];

// データをループで処理して出力
foreach ($data as $item) {
    echo "{$item['name']}{$item['age']}{$item['gender']}\n";
}

// "鈴木"の年齢を出力
foreach ($data as $item) {
    if ($item['name'] === '鈴木') {
        echo $item['age'];
        break; // 目標のデータが見つかったらループを終了
    }
}
?>