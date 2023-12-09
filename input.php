<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>最近美味しいビール飲んだ？</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(white 10%, rgb(226, 164, 38) 100%);
            background-repeat: no-repeat;
            margin: 0;
            padding: 20px;
            min-height: 100vh; /* ビューポートの高さに合わせる */
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        input[type="text"],
        input[type="textarea"],
        input[type="submit"] {
            display: block;
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 4px;
            border: 1px solid #ddd;
        }

        input[type="text"] {
            font-size: 16px;
        }

        textarea {
            height: 150px;
            text-align: top;
        }

        input[name="comment"] {
            height: 150px;
        }

        input[type="submit"] {
            background-color: #007bff;
            color: white;
            border-color: #007bff;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <form action="./write.php" method="post">
        お名前: <input type="text" name="name" placeholder="例：ジーズ太郎">
        商品名: <input type="text" name="beername" placeholder="例：一番搾り">
        メーカー: <input type="text" name="maker" placeholder="例：キリン">
        どこで買った/飲んだ: <input type="text" name="place" placeholder="例：成城石井">
        感想: <input type="textarea" name="comment" placeholder="どんな味だった？誰とどこで飲んだ？また飲みたい？">
        <input type="submit" value="送信">
    </form>
</body>
</html>
