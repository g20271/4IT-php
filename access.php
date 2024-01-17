<?php
    $access_before = $_COOKIE["access_time"];
    $access_current = date('Y-m-d H:i:s');
    setcookie("access_time", $access_current, time() + 60);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>アクセス履歴</title>
</head>
<body>
    <h1>【１分以内のアクセス履歴】<br><br>
    <?php
        if($access_before == null){
            $access_before = "なし";
        }
        echo "前回のアクセスは：".$access_before."<br>";
        echo "今回のアクセスは：".$access_current."<br>";
    ?>
    </h1>
</body>
</html>