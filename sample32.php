<?php
function get_youbi($ymd)
{
    $week = array('日', '月', '火', '水', '木', '金', '土');
    $youbi = date("w", strtotime($ymd));
    return $week[$youbi];
}

$ymd = "2020/06/02";
$youbi = get_youbi($ymd);
print $ymd . "は" . $youbi . "曜日です。";
