<?php
function get_youbi($ymd)
{
    $week = array('日', '月', '火', '水', '木', '金', '土');
    $youbi = date("w", strtotime($ymd));
    return $week[$youbi];
}

$birth = "2004/09/13";

print "誕生日は" . get_youbi($birth) . "曜日です。<br>";
print "私は" . time() - strtotime($birth) . "秒生存しています。<br>";