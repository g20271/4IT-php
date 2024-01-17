<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DBで作るBBS</title>
</head>
<body>
    <?php
    error_reporting(1);
    $form = <<<EOT
    <form action="sample_bbs.php" method="post">
        <table>
        <tr><td><font color="blue">ハンドル名とメッセージを入力して投稿ボタンを押す</font></td></tr>
    <tr><td>ハンドル名：<input type="text" name="handle" size="20"></td></tr>
    <tr><td>以下に投稿メッセージを入力してください</td></tr>
    <tr><td><textarea name="message" cols="50" rows="5"></textarea></td></tr>
    <tr><td><input type="submit" value="投稿"></td></tr>
    <table>
    </form>
EOT;
    echo $form;
    try {
        $db = new PDO('mysql:host=localhost;dbname=g20271_db;charset=utf8', 'g20271', '2023php-DB');

        if($_POST['handle'] != '' && $_POST['message'] != '') {
            $handle = $_POST['handle'];
            $message = $_POST['message'];
            $date = date('Y-m-d H:i:s');
            $sql2 ="insert into message_tbl values('{$date}','{$handle}','{$message}')";
            $db->query($sql2);
        }

        echo "<table border='1'>";
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