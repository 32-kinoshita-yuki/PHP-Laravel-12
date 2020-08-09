<?php
echo ("\n");

//1　elseを使った例文
$name = 'yuki';
if ($name === 'hanako') {
  echo '「私は はなこ です」' ;
} else {
 echo '「私はゆきではありません」';
}
echo ("\n");

//1 別解　elseifを使った例文
$name = 'yuki';
if ($name === 'hanako' ) {
  echo '「私ははなこです';
} elseif ($name =='yuki') { 
echo '「私はゆきです」';
}
echo ("\n");

//2
$total = 0;

for ($i = 1; $i <= 10000; $i++) {
    $total += $i;
}
echo $total ;
echo ("\n");
echo ("\n");
//3 
$fruits = array("Apple","Banana","Orange","peach","Grapes");
foreach($fruits as $fruit){
  
echo $fruit; 
echo ("\n");

}
echo ("\n");
//4
//for文の始めの値を定義する //
$start = 1;
//for文の終わりの値を定義する//
$end = 100;

for ($i = $start; $i <= $end; $i++) {
  // 5で割り切れたら{}内を実行する//
if (($i % 5) == 0) {
  echo $i;
  echo ("\n");
}
}


