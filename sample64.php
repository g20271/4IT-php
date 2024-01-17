<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDOでデータ抽出</title>
</head>
<body>
    <?php
    try {
        $pdo = new PDO('mysql:host=localhost;dbname=g20271_db;charset=utf8', 'g20271', '2023php-DB');
        $sql = 'SELECT id,name from customer';
        $rs = $pdo->query($sql);
        while ($row = $rs->fetch(PDO::FETCH_ASSOC)) {
            echo "id:" . $row['id'] . ' name:' . $row['name'] . '<br>';
        }
    } catch (PDOException $e) {
        echo 'DB接続エラー：' . $e->getMessage();
    }
    ?>
</body>
</html>