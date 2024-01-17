<?php
    session_start();
    $_SESSION["word"] = "香川高専";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>セッションが開始されました。</p>
    <p>
        $_SESSION["word"]に代入した値は「<?php print $_SESSION["word"]; ?>」です。
    </p>
    <p>
        <a href="session2.php">に飛ぶ</a>
</body>
</html>