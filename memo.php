<?php
if (isset($_COOKIE["memo"])) {
    $memo = $_COOKIE["memo"];
    if (isset($_POST["memo"])) {
        $memo = $memo . "<br>" . $_POST["memo"];
    }
    setcookie("memo", $memo, time() + 60 * 60 * 24 * 365);
    
} else {
    if (isset($_POST["memo"])) {
        $memo = $_POST["memo"];
        setcookie("memo", $memo, time() + 60);
    } else {
        $memo = "";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>１分メモ</title>
</head>
<body>
    1分メモ<br>
    <form action="memo.php" method="post">
        <textarea name="memo" cols="50" rows="5"><?php echo $memo; ?></textarea><br>
        <input type="submit" value="送信">
    </form>
    <?php echo $memo; ?>
</body>
</html>