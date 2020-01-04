<?php

function multip($max){
    echo $max * 2;
}
echo multip(10);
?>


<?php

function f($a, $b){
    echo $a + $b;
}
echo f(100,50);
?>


<?php

$arr=array(1, 3, 5 ,7, 9);

$total = 1;
foreach ($arr as $a){
    $total *= $a;
}
echo $total;
?>


<?php

echo max(10,1,2,3,4);
 ?>
 
 
<?php

$text ='<h1>Hello</h1>';
echo strip_tags($text);
echo "\n"
?>


<?php

$stack = array("orange", "banana");
array_push($stack, "apple", "melon", "peach");
print_r($stack);
?>


<?php

//配列を作成
$array1 = [1, 2, 3];
$array2 = [10, 20, 30];
$array3 = [100, 200, 300];
 
//配列を結合する
$array = array_merge($array1, $array2, $array3);
 
print_r($array);
?>


<?php

//time関数
//現在のタイムスタンプを取得 time()で取得
echo '現在のUnixタイムスタンプ：'.time();
 
echo "\n";
 
//3日後のタイムスタンプを取得
$nweek = time() + (3 * 24 * 60 * 60);
echo '3日後のUnixタイムスタンプ：'.$nweek;
echo "\n";
echo "\n";

//mktime関数
//指定した日時のタイムスタンプを取得
$timestamp = mktime(0, 0, 0, 1, 1, 2020);
echo $timestamp;
?>


<?php
echo date('Y,F,d,l,A-h:i:s');
?>
echo "\n";

