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
    <title></title>
</head>
<body>
    
</body>
</html>