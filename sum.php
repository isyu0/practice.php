<?php

//課題1 引数に数値を指定して実行すると、数値を2倍で返す関数

function multip($max){
    echo $max * 2;
}
echo multip(10);

echo "\n";
echo "\n";

//課題2 $a と $b　を足した結果を返す関数
function f($a, $b){
    echo $a + $b;
}
echo f(100,50);

echo "\n";
echo "\n";



//課題3 要素をすべてかけた結果を返す関数(修正)
function kakeru($arr){
    
 $total = 1;
 foreach ($arr as $a){
    $total *= $a;
 }
 return $total;
 
}
echo kakeru(array(1,3,5,7,9,));

echo "\n";
echo "\n";

//課題4 配列の中で一番大きい値を返す max_array という関数（修正）
function max_array($arr){

$max_number = $arr[0];
foreach($arr as $a){
 if ($max_number < $a){
     $max_number = $a;
  }
 }
 return $max_number;
}
echo max_array(array(5,2,3,9,11,4));

echo "\n";
echo "\n";

//課題：ビルトイン関数について調べる

//strip_tags
$text ='<h1>Hello</h1>';
echo strip_tags($text);

echo "\n";
echo "\n";

//array_push
$stack = array("orange", "banana");
array_push($stack, "apple", "melon", "peach");
print_r($stack);

echo "\n";
echo "\n";

//array_merge
//配列を作成
$array1 = [1, 2, 3];
$array2 = [10, 20, 30];
$array3 = [100, 200, 300];
 
//配列を結合する
$array = array_merge($array1, $array2, $array3);
 
print_r($array);

echo "\n";
echo "\n";

//time関数
//現在のタイムスタンプを取得 time()で取得
echo '現在のUnixタイムスタンプ：'.time();
 
echo "\n";
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

echo "\n";

//date
echo date('Y,F,d,l,A-h:i:s');

echo "\n";


