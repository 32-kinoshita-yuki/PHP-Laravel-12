<?php
echo ("\n");
// 1.引数に数値を指定して実行すると、数値を2倍にして返す関数を作成してください

function sum($a){
   return $a * 2;
}
//10*2を実行した場合
echo sum(10);//20
echo ("\n");


//2. $a と $b を仮引数に持ち、　$a と $b　を足した結果を返す関数を作成してください。
function f($a,$b){
    return $a + $b;
}
echo f(4,6);//10
echo ("\n");

//3.$arr という配列の仮引数を持ち、数値が入った配列array(1, 3, 5 ,7, 9) を渡すとその要素をすべてかけた結果を返す関数を作成してください。
 function sample($arr){//関数sampleを宣言
  $result = 1;//変数$resultを宣言＆1を代入
  foreach($arr as $a){//$arrから一つずつ値を取り出し$aに代入し下記の処理をする。
    $result *= $a;
  }
  echo $result;
}
sample(array(1, 3, 5 ,7, 9));//
echo ("\n");

//4.次のプログラムは、配列の中で1番大きい値を返す max_array という関数を実装しようとしています。途中の部分を完成させてください。
function max_array($arr) {
    $max_number = $arr[0];
    foreach($arr as $a)//$arrから一つずつ値を取り出し$aに代入し下記の処理をする。
    {
        if($max_number < $a)//$max_number が$aより小さいとき
        {
            $max_number = $a;//$aを$max_numberに代入する
        }
    }
    return $max_number;//返り値を設定
}

echo max_array(array(1,86,500,79,3));
echo ("\n");
//5次のビルトイン関数の用途、使い方を調べて実際に使ってみてください。
//5.strip_tags
$str = "<h1>strip_tagsとは</h1>"
  . "<p>HTMLタグを取り除くスクリプトです。</p>";
echo strip_tags($str) ;
echo ("\n");
echo ("\n");
//array_push
$array_push = ['array_pushは', '1つ以上の要素を', '配列の最後に'];
 
array_push($array_push, '追加したい場合に', 'array_push関数を使用します。');
print_r($array_push);
echo ("\n");
//5.array_merge
$array1 = ['array_merge', 'とは', '配列の要素の'];
$array2 = ['最後に', 'ひとつまたは', '複数の配列を'];
$array3 = ['結合', 'するときに', '使用します。'];

$array = array_merge($array1, $array2, $array3);
print_r($array);
echo ("\n");
//5. mktime 2020年7月28日のタイムスタンプを獲得
$timestamp = mktime(0, 0, 0, 7, 28, 2020);
echo $timestamp;
echo ("\n");
//5.time
echo time();
echo ("\n");
echo ("\n");
//5.date
echo date('Y-m-d');
echo ("\n");