<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    try {
        $conn = new PDO("mysql:host=localhost;dbname=g20271_db;charset=utf8", "g20271", "2023php-DB");
        $sql = "SELECT * FROM book";
        $rs = $conn->query($sql);
        echo "<table border='1'>";
        echo "<tr><th>タイトル</th><th>著者</th><th>出版社</th></tr>";
        while ($row = $rs->fetch(PDO::FETCH_ASSOC)) {
            echo "<tr>";
            echo "<td>" . $row['title'] . "</td>";
            echo "<td>" . $row['author'] . "</td>";
            echo "<td>" . $row['publish'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } catch (PDOException $e) {
        echo "エラー：" . $e->getMessage();
    }
    ?>
</body>
</html>