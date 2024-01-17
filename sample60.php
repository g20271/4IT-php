<?php
$createSB = <<<DDL
    CREATE TABLE seibetu
    (
        id INT PRIMARY KEY,
        danjyo VARCHAR(10)
    )
DDL;

try {
    $pdo = new PDO('mysql:host=localhost;dbname=g20271_db;charset=utf8', 'g20271', '2023php-DB');
    $rs = $pdo->query($createSB);
    $rs = $pdo->query('INSERT INTO seibetu VALUES (1, "男")');
    $rs = $pdo->query('INSERT INTO seibetu VALUES (2, "女")');
} catch (PDOException $e) {
    echo 'DB接続エラー：' . $e->getMessage();
}