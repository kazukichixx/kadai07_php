<?php
$name = $_GET['name'];
$birthPlace = $_GET['birthPlace'];

// ファイルに書き込み
$time = date('Y-m-d H:i:s');
//文字作成
$data = $time . $name . $birthPlace . "\n";
file_put_contents('data/data.txt', $data, FILE_APPEND);
?> 