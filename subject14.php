<?php
$create_name_SB = <<<DDL
    CREATE TABLE name
    (
        name VARCHAR(50) PRIMARY KEY,
        tel VARCHAR(20),
        address VARCHAR(50),
        carrer VARCHAR(50)
    )
DDL;

$create_carrier_SB = <<<DDL
    CREATE TABLE carrier
    (
        name VARCHAR(50) PRIMARY KEY,
        address VARCHAR(50)
    )
DDL;

try {
    $pdo = new PDO('mysql:host=localhost;dbname=g20271_db;charset=utf8', 'g20271', '2023php-DB');
    $rs = $pdo->query($create_name_SB);
    $rs = $pdo->query($create_carrier_SB);

    $rs = $pdo->query('INSERT INTO name VALUES ("安藤一郎", "080-1234-1025", "ichirou", "ソフトバンク")');
    $rs = $pdo->query('INSERT INTO name VALUES ("井上二郎", "080-0012-1478", "jirou", "au")');
    $rs = $pdo->query('INSERT INTO name VALUES ("上野三郎", "080-0486-8523", "saburou", "ドコモ")');

    $rs = $pdo->query('INSERT INTO carrier VALUES ("ソフトバンク", "i.softbank.jp")');
    $rs = $pdo->query('INSERT INTO carrier VALUES ("au", "ezweb.ne.jp")');
    $rs = $pdo->query('INSERT INTO carrier VALUES ("ドコモ", "docomo.ne.jp")');

    $sql1 = 'SELECT * FROM name';
    $rs = $pdo->query($sql1);
    echo "<table border='1'>";
    echo "<tr><th>名前</th><th>電話番号</th><th>メールアドレス</th><th>キャリア</th></tr>";
    while ($row = $rs->fetch(PDO::FETCH_ASSOC)) {
        echo "<tr>";
        foreach ($row as $key => $value) {
            echo "<td>" . $value . "</td>";
        }
        echo "</tr>\n";
    }
    echo "</table>";


    $sql1 = 'SELECT * FROM carrier';
    $rs = $pdo->query($sql1);
    echo "<table border='1'>";
    echo "<tr><th>キャリア</th><th>メールアドレス</th></tr>";
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