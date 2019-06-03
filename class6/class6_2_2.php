<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>6 自訂函式-靜態變數(static指令)</title>
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
<?php
  /*靜態變數*/
  //一般區域變數在執行後，此變數也就被釋放掉，不會存在記憶體中
  //但加上靜態變數static指令，可以讓區域變數值持續存在，不因執行一次後就消失
  function textbook(){
    static $book;
    $book += 3; //遞增加3後，存回於變數
    echo $book . "本教科書<br/>";

  }

  textbook();
  textbook();
  textbook();
 ?>



  </body>
</html>
