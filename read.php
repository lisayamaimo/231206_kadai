<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>Document Title</title>
    <style>
        /* ここにCSSを追加 */
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(white 10%, rgb(226, 164, 38) 100%);
            background-repeat: no-repeat;
            margin: 0;
            padding: 20px;
            min-height: 100vh; /* ビューポートの高さに合わせる */
        }
        .container {
            width: 80%;
            margin: auto;
            overflow: hidden;
        }
        .content {
            background: #fff;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="content">
            <?php
            // ファイルを開いて内容を読み込む
            $data = file_get_contents('./data/data.txt');

            // nl2br ... textファイルの改行を<br>に変換する関数
            echo nl2br($data);
            ?>
        </div>
    </div>
</body>
</html>
