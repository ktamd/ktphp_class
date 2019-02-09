<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>4 條件控制&amp;迴圈</title>
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <?php
     $k=30;
     if ($k>20) {
        do {
          $k+=10; //遞增10
          echo $k."&nbsp;";
            if ($k >= 100 && $k <= 180) { //從40-180範圍，100至180間都加上逗號
            echo ",";
            }
        } while ($k<130);//最後作條件判斷-迴圈遞增到小於130就跳出
     }else {
        echo "通通都沒有";
     }
   ?>
   <hr>
   <?php
    $k=10;
     do {
       $k+=10; //遞增10
         if ($k >= 100 && $k <= 180) { //從20-180範圍，取出100至180加上逗號
         echo $k.",";
         }
     } while ($k<130)//最後作條件判斷-迴圈遞增到小於130就跳出
  ?>
  </body>
</html>
