<?php
// 数値を+1して返す関数
function incrementNumber($number)
{
    return $number + 1;
}

// 関数を呼び出して結果を出力
$inputNumber = 5; // ここに入力する数値を設定してください
$result = incrementNumber($inputNumber);
echo "$result";
?>