<?php
// ランダムな数値を生成して配列に格納
$randomNumbers = array();
for ($i = 0; $i < 10; $i++) {
    $randomNumbers[] = mt_rand(0, 99);
}

// 配列の内容を表示
echo "array(10) [\n";
foreach ($randomNumbers as $key => $value) {
    echo "  [{$key}] => int({$value})\n";
}
echo "]";
?>