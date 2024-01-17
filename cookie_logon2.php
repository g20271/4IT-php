<?php
$u = $_POST["user"];
setcookie("data_user", $u, time() + 120);
print "ようこそ!";
?>