<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>4 條件控制&amp;迴圈</title>
    <link rel="stylesheet" href="css/style.css">
    <style media="screen">
      .alone01 {padding-left: 40px;}
      .alone01  a{background-color: blue !important;}
      .alone02 {padding-left: 20px;}
      .alone02  a{background-color: red !important;}
    </style>
  </head>
  <body>
    <?php
    //取出的本頁路徑存到$path變數
    $path = $_SERVER['PHP_SELF'];
    //讓取出的本頁路徑不帶上.php
    $practice =  basename($path,".php");
    //秀出本頁的路徑，並且去掉.php
    echo $practice."<hr>";

    switch ($practice) {
      case 'class4_1': //條件值1
        echo "這是練習4_1"; //條件值1不符合$practice的值，不執行此行內容
        $mypage = 0;
        break;
      case 'class4_2': //條件值2
        echo "這是練習4_2"; //條件值2符合$practice的值，執行此行內容
        $mypage = 1;
        break;
      default:
        echo "什麼都沒有";
        break;
    }
    echo "<hr>";
     ?>
    <div class="page">
      <ul>
        <li><a href="<?php echo $practice.".php";?>">點我試試</a></li>
        <li <?php echo ($mypage == 0)?"class='alone01'":"class='alone02'";?>><a href="#">不符合$pacrtice的值所以li標籤內的值是選擇alone02這個css自訂選擇器</a></li>
        <li <?php echo ($mypage == 1)?"class='alone01'":"class='alone02'";?>><a href="#">符合$pacrtice的值所以li標籤內的值是選擇alone01這個css自訂選擇器</a></li>
      </ul>
    </div>
  </body>
</html>
