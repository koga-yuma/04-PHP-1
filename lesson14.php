<?php
// ランダムな数値を生成して配列に格納
$randomNumbers = array();
$randomNumbers[] = mt_rand(0, 99);
$randomNumbers[] = mt_rand(0, 99);
$randomNumbers[] = mt_rand(0, 99);
$randomNumbers[] = mt_rand(0, 99);
$randomNumbers[] = mt_rand(0, 99);
$randomNumbers[] = mt_rand(0, 99);
$randomNumbers[] = mt_rand(0, 99);
$randomNumbers[] = mt_rand(0, 99);
$randomNumbers[] = mt_rand(0, 99);
$randomNumbers[] = mt_rand(0, 99);

// 配列の内容を表示
echo "array(10) [\n";
echo "  [0] => int({$randomNumbers[0]})\n";
echo "  [1] => int({$randomNumbers[1]})\n";
echo "  [2] => int({$randomNumbers[2]})\n";
echo "  [3] => int({$randomNumbers[3]})\n";
echo "  [4] => int({$randomNumbers[4]})\n";
echo "  [5] => int({$randomNumbers[5]})\n";
echo "  [6] => int({$randomNumbers[6]})\n";
echo "  [7] => int({$randomNumbers[7]})\n";
echo "  [8] => int({$randomNumbers[8]})\n";
echo "  [9] => int({$randomNumbers[9]})\n";
echo "]";
?>