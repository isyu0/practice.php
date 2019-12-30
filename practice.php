<?php

$name = "ito_shumpei";

if($name == "ito_shumpei"){
  echo "私は伊藤駿平です。";
}else{
  echo "名前が一致しません。";
}
echo "\n";
echo "\n";


$total = 0;
echo $total;

for ($i = 0; $i <= 10000; $i++) {
  $total += $i;
}
echo $total;
echo "\n";
echo "\n";

$fruits = array("apple", "orange", "lemon", "peach", "melon");

foreach($fruits as $fruit){
  echo $fruit;
  echo "\n";
}
echo "\n";



/* for文の始めの値を定義する /
$start = 1;
/* for文の終わりの値を定義する ($i = $start;←エラー発生 $ < $end;←95で終わる)*/
$end = 100;

for($i = 1; $i <= $end; $i++) {

  // 5で割り切れたら{}内を実行する (echo "\n";で改行)
  if($i % 5 == 0){
    echo $i;
    echo "\n";
  }
}



