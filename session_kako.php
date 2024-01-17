<?php
session_start();
if (!isset($_SESSION["kaisu"])) {
    print "ようこそ１回目のご来場";
    $_SESSION["kaisu"] = 1;
    $_SESSION["kako"][1] = date("Y年m月d日 H時i分s秒");
} else {
    $_SESSION["kaisu"]++;
    $c = $_SESSION["kaisu"];
    $_SESSION["kako"][$c] = date("Y年m月d日 H時i分s秒");
    for ($i = 1; $i <= $c; $i++) {
        print $i . "回目は" . $_SESSION["kako"][$i] . "でした<br>";
    }
}