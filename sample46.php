<?php
$scores = array(
    "A" => 165100,
    "ii" => 255900,
    "三" => 109500,
    "IV" => 185600,
    "ごー" => 232200,
    "六" => 301100,
    "ナナ" => 146900
);

echo "<pre>ソート前\n";
print_r($scores);
echo "</pre>\n";
sort($sort);
echo"<pre>ソート後";
print_r($scores);
echo "</pre>";