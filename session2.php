<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>session1.phpから飛んできました。再びセッションを開始。</p>
    <p>受取ったセッション変数の値は「<?php print $_SESSION["word"]; ?>」です。</p>
</body>
</html>