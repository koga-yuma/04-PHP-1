<?php
// リンゴとブドウの値段を変数に代入
$apple_val = 100; // 1個あたりのリンゴの値段（円）
$grape_val = 300; // 1個あたりのブドウの値段（円）

// リンゴとブドウの個数を設定
$apple_qua = 1; // リンゴの個数
$grape_qua = 2; // ブドウの個数

// 合計を計算
$sum = ($apple_val * $apple_qua) + ($grape_val * $grape_qua);

// 結果を表示
// 各項目と合計を表示
echo "{$apple_val}円のリンゴを{$apple_qua}個。\n";
echo "{$grape_val}円のブドウを{$grape_qua}個。\n\n";
echo "合計は{$sum}円です。";
?>