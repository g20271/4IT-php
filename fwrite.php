<?php
$fh = fopen("temp/test.txt", "rt");
if ($fh) {
    fwrite($fh, "\n○○○追加文字列○○○");
    fclose($fh);
} else {
    print "ファイルのオープンに失敗しました";
}
