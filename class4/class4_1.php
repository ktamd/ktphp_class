<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>4 條件控制&amp;迴圈</title>
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
<?php
/*以下為if條件控制
單向if 假如是
雙向if..else 假如是/不然就是
多向if..elseif..else 假如是/不然就是/再不然就是
*/
//單向if
  $k=18;
  if ($k >= 0) {
    echo "明天";
  }
//雙向if..else
  $t=10;
  if ($t = 10) {
    echo "我想吃蛋餅";
  } else {
    echo "我不想吃蛋餅";
  }
//多向if..elseif..else
  if ($t == 18) {
    echo "，外加玉米濃湯";
  }elseif ($t != 18) {
    echo "，外加一杯奶茶";
  }else {
    echo "，安捏丟賀";
  }
echo "<hr>";

//雙向if..else-去掉大括弧的寫法，在if()、else後加上冒號":"，另外結尾是分號"endif;"
//此處用大括弧原因在於，不加上去的話編譯變數會出錯，除非多打一個空格"$s 等於 $k"才可執行
  $x=12;
  $y=18;
  $z=$x+$y;
  if ($x == $y):
    echo "{$x}等於{$y}";
  else:
    echo "{$x}不等於{$y}";
  endif;
echo "<hr>";

//多向if elseif else-去掉大括弧的寫法，在if()、elseif、else後加上冒號":"，另外結尾是分號"endif;"
  if ($z == 18):
    echo "kt棧長{$z}歲，可以考駕照";
  elseif ($z < 18):
    echo "kt棧長{$z}歲，是個未成年人";
  else:
    echo "kt棧長{$z}歲，已經可以投票了";
  endif;
 ?>
  </body>
</html>
