<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>3.4 表單傳送接收</title>
  </head>
  <body>
    <?php
      //將$_GET存入到$box陣列變數
      $box = $_GET["list"];
      //透過foreach迴圈，來取出傳送到陣列變數$box裡的值
      //每執行一次迴圈，$value的值，就會秀出在頁面
      foreach($box as $value) {
        echo $value."<br />";
      }
    ?>
  </body>
</html>
