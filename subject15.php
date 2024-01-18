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
        $conn = new PDO("mysql:host=localhost;dbname=g20271_db;charset=utf8", "g20271", "2023php-DB");
        $sql = "SELECT * FROM newbook WHERE title like '%$kw%'";
        $rs = $conn->query($sql);
        echo "<table border='1'>";
        echo "<tr><th>図書番号</th><th>タイトル</th><th>著者</th></tr>";
        echo "<tr><th>出版社・社</th><th>発行年月</th><th>所在</th></tr>";
        while ($row = $rs->fetch(PDO::FETCH_ASSOC)) {
            echo "<tr>";
            echo "<td>" . $row['id_no'] . "</td>";
            echo "<td>" . $row['title'] . "</td>";
            echo "<td>" . $row['author'] . "</td>";
            echo "<td>" . $row['publisher'] . "</td>";
            echo "<td>" . $row['date'] . "</td>";
            echo "<td>" . $row['place'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } catch (PDOException $e) {
        echo "エラー：" . $e->getMessage();
    }
    ?>
</body>
</html>