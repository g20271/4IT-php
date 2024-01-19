<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DBで作るBBS</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</head>
<body>
    <?php
    error_reporting(1);
    $header = <<<EOT
    <pre class="mb-0 mt-0">
                                                                   
        ■              ■           ■                               
       ■■             ■■           ■■ ■■   ■■■■■    ■■■■■     ■■■■ 
    ■■■■■■           ■■        ■■■■■■■     ■    ■   ■    ■   ■   ■■
       ■            ■■             ■       ■    ■   ■    ■   ■     
       ■  ■■■■     ■■           ■■■■■■■    ■    ■   ■    ■   ■■■   
      ■            ■■              ■       ■■■■■    ■■■■■      ■■■ 
      ■             ■■             ■       ■    ■   ■    ■       ■■
     ■■              ■■         ■■■■■      ■    ■■  ■    ■■       ■
     ■   ■            ■■       ■■  ■■■■    ■    ■■  ■    ■■  ■   ■■
    ■■    ■■■■■        ■■       ■■■■   ■   ■■■■■■   ■■■■■■    ■■■■ 
                                                                   
    </pre>
EOT;

    $form = <<<EOT
    <form action="subject18BBS.php" method="post">
        <table class="table">
        <tr><td><font color="blue">ハンドル名とメッセージを入力して投稿ボタンを押す</font></td></tr>
    <tr><td>ハンドル名：<input type="text" name="handle" size="20"></td></tr>
    <tr><td>以下に投稿メッセージを入力してください</td></tr>
    <tr><td><textarea name="message" cols="50" rows="5"></textarea></td></tr>
    <tr><td><input type="submit" class="btn btn-primary" value="投稿"></td></tr>
    <table>
    </form>
EOT;
    
    try {
        $db = new PDO('mysql:host=localhost;dbname=g20271_db;charset=utf8', 'g20271', '2023php-DB');

        // テーブルが存在しない場合は作成
        $db->exec("CREATE TABLE IF NOT EXISTS counter (count INTEGER)");

        // カウンタの現在の値を取得
        $stmt = $db->prepare("SELECT count FROM counter");
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        // カウンタを取得できた場合は更新、できなかった場合は初期化
        if ($row) {
            $counter = $row['count'] + 1;
            $stmt = $db->prepare("UPDATE counter SET count = :count");
        } else {
            $counter = 1;
            $stmt = $db->prepare("INSERT INTO counter (count) VALUES (:count)");
        }

        // カウンタを保存
        $stmt->bindParam(':count', $counter, PDO::PARAM_INT);
        $stmt->execute();

        

        // カウンタの値を表示
        echo $header;
        echo "<br><br><h3>こんにちは、あなたは $counter 人目のお客様です。<h3><br>";

        echo $form;



        if($_POST['handle'] != '' && $_POST['message'] != '') {
            $handle = $_POST['handle'];
            $message = $_POST['message'];
            $date = date('Y-m-d H:i:s');
            $sql2 ="insert into message_tbl values('{$date}','{$handle}','{$message}')";
            $db->query($sql2);
        }

        echo '<table class="table">';
        echo "<tr><th>日時</th><th>ハンドル名</th><th>メッセージ</th></tr>";
        $sql1 = 'SELECT * from message_tbl';
        $rs = $db->query($sql1);

        while ($row = $rs->fetch(PDO::FETCH_ASSOC)) {
            echo "<tr>";
            foreach ($row as $key => $value) {
                echo "<td>" . $value . "</td>";
            }
            echo "</tr>\n";
        }
        echo "</table>";
    }catch (PDOException $e) {
        echo 'DB接続エラー：' . $e->getMessage();
    }
    ?>
</body>
</html>