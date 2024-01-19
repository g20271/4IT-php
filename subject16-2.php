<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>コンピュータ関連図書</title>
</head>
<body>
    <?php
    try {
        $kw = $_POST['key'];
        $conn = new PDO("mysql:host=localhost;dbname=g20271_db;charset=utf8", "g20271", "2023php-DB");
        $sql = "select * from newbook where title = '$kw'";
        $rs = $conn->query($sql);
        echo "<table border='1'>";
        echo "<tr><th>図書番号</th><th>タイトル</th><th>著者</th>";
        echo "<th>出版社・社</th><th>発行年月</th><th>所在</th></tr>";
        while ($row = $rs->fetchObject()) {
            echo "<tr>";
            foreach($row as $r) {
                echo "<td>" . $r . "</td>";
            }
            echo "</tr>";

        }
        echo "</table>";
    } catch (PDOException $e) {
        echo "エラー：" . $e->getMessage();
    }
    ?>
</body>
</html>