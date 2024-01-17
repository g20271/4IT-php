<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>クッキーのサンプル</title>
</head>
<body>
    <form action="cookie_logon2.php" method="post">
    <?php
        $vd = (isset($_COOKIE["data_user"])) ? $_COOKIE["data_user"] : "";
        print "ユーザー名：<input type='text' name='user' value='$vd'><br>";
    ?>
    パスワード<input type="password" name="pass"><br>
    <input type="submit" value="送信">
    </form>
</body>
</html>