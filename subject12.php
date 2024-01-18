<?php
try {
    $pdo = new PDO('mysql:host=localhost;dbname=g20271_db;charset=utf8', 'g20271', '2023php-DB');
    $sql = 'SELECT * from gender';
    $rs = $pdo->query($sql);
    echo "<table border='1'>";
    echo "<tr><th>ID</th><th>性別</th></tr>";
    while ($row = $rs->fetch(PDO::FETCH_ASSOC)) {
        echo "<tr>";
        foreach ($row as $key => $value) {
            echo "<td>" ."$key = " . $value . "</td>";
        }
        echo "</tr>\n";
    }
    echo "</table>";
} catch (PDOException $e) {
    echo 'DB接続エラー：' . $e->getMessage();
}