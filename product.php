<?
# スペース区切りの整数の入力
fscanf(STDIN, "%d %d", $b, $c);
$product = $b * $c;

if($product % 2 === 0){
    echo "Even";
}else{
    echo "0dd";
}
