<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css">
    <title>4 條件控制&amp;迴圈</title>
  </head>
  <body>
    <?php
    //打印一組10到150的數字，並且遞增10上去再做條件判斷
    //嘗試迴圈內包入2個條件if
    $k = 0;
    while ($k < 150) {
      $k+=10;
      echo $k."&nbsp;"; //此符號是空白字元
        if ($k != 50 && $k != 110 && $k != 140) { //如果$k不等於50、100、140就加上逗號","
          echo ",";
          if ($k >= 150) { //如果$k大於等於150就加上笑臉
            echo "^_^";
          }
        }
    }
    ?>
  </body>
</html>
