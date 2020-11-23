<?php
# 整数の入力
// fscanf(STDIN, "%d", $a);
$a = trim(fgets(STDIN));
# スペース区切りの整数の入力
fscanf(STDIN, "%d %d", $b, $c);
# 文字列の入力
// fscanf(STDIN, "%s", $s);
$s = trim(fgets(STDIN));
# 出力
echo ($a + $b + $c) . " " . $s . "\n";
