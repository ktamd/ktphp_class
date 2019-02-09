<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>3.3 運算子&amp;運算式</title>
  </head>
  <body>
    <?php
       /*條件 運算子*/
       $k = '我有一支筆';
       $name = isset($k) ? $k : '沒有東西';
       //isset是檢查該變數是否存在的函式
      //檢查$k是否存在，若存在就秀出變數值，反之則秀出'沒有東西'
       echo $name . "<br />";

       /*三元條件 運算子*/
       $x = 20; $y = 15;
       $z = $x ?: $y; //簡寫的方式，當$x有值就會回傳$a存入$z秀出，反之則秀出$y的值
       echo $z;
    ?>
    <?php echo phpversion(); ?>
  </body>
</html>
