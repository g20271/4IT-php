<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>コンピュータ関連図書検索</title>
</head>
<body>
    <?php
    try {
        $pdo = new PDO('mysql:host=localhost;dbname=g20271_db;charset=utf8', 'g20271', '2023php-DB');
        $sql = 'SELECT * from newbook';
        $rs = $pdo->query($sql);
        echo "<table border='1'>";
        echo "<tr>";
        echo "<th>図書番号</th><th>タイトル</th><th>著者</th><th>出版者・社</th><th>発行年月</th><th>所在</th>";
        echo "</tr>";
        while ($row = $rs->fetch(PDO::FETCH_ASSOC)) {
            echo "<tr>";
            foreach ($row as $key => $value) {
                echo "<td>" . $value . "</td>";
            }
            echo "</tr>\n";
        }
        echo "</table>";
    } catch (PDOException $e) {
        echo 'DB接続エラー：' . $e->getMessage();
    }
    ?>

</body>
</html>