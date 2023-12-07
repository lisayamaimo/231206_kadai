<?php
$name = $_POST['name'];
$beername = $_POST['beername'];
$maker = $_POST['maker'];
$place = $_POST['place'];
$comment = $_POST['comment'];

$time = date('Y-m-d H:i:s');

// 書き込むデータの内容を整形する。
// "\n"は改行。HTMLの<br>と同じようにtext中で利用されるとtextは改行される。
$data = $time . '/' . $name . '/' . $beername . '/'.  $maker . '/' .  $place .'/' .  $comment . "\n";

// 第３引数に、FILE_APPENDしないと上書きされちゃう
file_put_contents('data/data.txt', $data, FILE_APPEND);
?>

<html>
<head>
    <meta charset="utf-8">
    <title>File書き込み</title>
</head>

<body>

    <h1>書き込みありがとうございます！</h1>
    <ul>
        <li><a href="read.php">皆さんの書き込みはこちら！</a></li>
        <li><a href="input.php">戻る</a></li>
    </ul>
</body>

</html>
