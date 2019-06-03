<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>6 自訂函式-區域、全域變數</title>
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
<?php
  /*全域、區域變數之差別*/
  $a = "全域變數"."<br>";

  function news(){
    $a = "區域變數(我不會受到影響)"."<br>";
    echo $a;
  }
  echo $a;
  news(); //呼叫出來的區域變數值，並不會受到全域變數影響
  echo $a."<hr>"; //呼叫時不受到影響
 ?>


<?php
  /*將區域變數改變為->全域變數*/
  $b = "全域變數"."<br>";

  function network(){
    global $b; //將區域變數變更為->全域變數
    $b = "區域變數(加了global就會受到影響嚕~)"."<br>";
    echo $b;
  }
  echo $b;
  network(); //呼叫出來的變數值，已經是全域變數了
  echo $b."<hr>"; //呼叫時會受到影響
?>

  </body>
</html>
