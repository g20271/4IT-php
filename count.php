<?php
    session_start();
    if(!isset($_SESSION["count"])){
        $_SESSION["count"] = 1;
    }else{
        $_SESSION["count"]++;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
    <?php
        print "あなたは".$_SESSION["count"]."回目の訪問です。<br>";
        print "<a href='. $_SERVER{'PHP_SELF'}>";
    ?>
    </h1>
</body>
</html>