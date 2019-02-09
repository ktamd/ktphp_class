<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>3.3 運算子&amp;運算式</title>
  </head>
  <body>
    <?php
       /*遞增 運算子*/
       $k = 15; $k++;
       echo '$k = ' . $k . "<br />"; //遞增，輸出$k = 16
       $t = 6;
       echo $t++ . "<br />"; //後置遞增，輸出6
       echo $t++ . "<br />"; //後置遞增，輸出7
       echo $t++ . "<br />"; //後置遞增，輸出8
       $s = 2;
       echo ++$s . "<hr>"; //前置遞增，輸出3

       /*遞減 運算子*/
       $k = 15; $k--;
       echo '$k = ' . $k . "<br />"; //遞增，輸出$k = 14
       $t = 6;
       echo $t-- . "<br />"; //後置遞減，輸出6
       echo $t . "<br />"; //輸出5
       $s = 2;
       echo --$s . "<br />"; //前置遞減，輸出1
    ?>
  </body>
</html>
