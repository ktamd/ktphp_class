<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>5.5 陣列-排序與搜索</title>
    <link rel="stylesheet" href="css/style.css">
    </head>
<body>
  <?php
  //sort、rsort會將索引鍵轉換為整數
  $name = array("a" => "Amy", "b" => "Tom", "c"=>"Gimmy");
  print_r($name); echo "<br/>"; // 秀出鍵值

  // in_array()函式，挑出$data陣列裡有Tom的值
  if (in_array('Tom', $name)) {
     print "陣列\$data有Tom<br/>";
  }

  sort($name);  // 排序-鍵值由小排到大
  foreach($name as $k => $t){
    echo "$k = $t" . "、"; // 迴圈撈值
  }
  echo "<br>";

  rsort($name);  // 排序-鍵值由大排到小
  foreach($name as $k => $t){
    echo "$k = $t" . "、"; // 迴圈撈值
  }
  echo "<hr>";
?>

<?php
  //asort、arsort會保留索引鍵，以鍵值做排序
  $animal = array("d"=>"ape", "a"=>"dog", "b"=>"cat", "c"=>"bear");
  print_r($animal); echo "<br/>"; // 顯示陣列元素

  // array_search()函式，挑出陣列裡有bear的值
  if (($k = array_search("bear",$animal,true)) ) {
     print "陣列\$animal有bear => $k <br/>";
  }

  asort($animal);  // 排序-鍵值由小排到大
    // 顯示陣列元素
  while (list($key, $value) = each($animal)) {
     echo "$key = $value"."、";
  }
  echo "<br/>";

  arsort($animal);  // 排序-鍵值由大排到小
  while (list($key, $value) = each($animal)) {
     echo "$key = $value"."、";
  }
  echo "<hr>";
  ?>

<?php
  $quality = array("a" => "low", "b" => "middle", "c" => "high");
  //ksort、krsort，以索引鍵做排序
  ksort($quality);  // 排序-索引鍵由小排到大
  while (list($k, $t) = each($quality)) {
     echo "$k = $t"."、";
  }
  echo "<br/>";

  krsort($quality);  // 排序-索引鍵由大排到小
  // 顯示陣列元素
  while (list($k, $t) = each($quality)) {
     echo "$k = $t"."、";
  }
  echo "<br/>";
?>

  </body>
</html>
