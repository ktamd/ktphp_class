<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>6 自訂函式-可變動函式</title>
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
  <?php
  /*可變動函式*/
  //將函式存入變數，再進行呼叫
    function notebook(){
      echo "筆記本"."<br/>";
    }

    function comicbook(){
      echo "漫畫書"."<br/>";
    }

    function textbook(){
      echo "教科書"."<br/>";
    }

  /*將變數值的名稱取為和函式同名，
    雖說變數名稱是相同，但指定到不同的方法，所以呼叫的值也會是不同的。
    實務上這種方式，我是幾乎沒再用啦.....不過為了教學解說就放一下。
  */
    $book = "notebook";
    $book();
    echo $book."<br>";

    $book = "comicbook";
    $book();
    echo $book."<br>";

    $book = "textbook";
    $book();
    echo $book."<br>";
  ?>


  </body>
</html>
