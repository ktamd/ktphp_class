<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>3.3 運算子&amp;運算式</title>
  </head>

  <body>
    <?php
       /*賦值運算子*/
       $k = 15;
       $t = 6;
       $s = 2;

       $k *= $s;
       echo $k . "<br/>"; //輸出的值為30
       $k += $t;
       echo $k . "<br/>"; //輸出的值為36，原因在於上一行的$K的值已是30，所以會累加上去(即30+6)
       $k += $k;
       echo $k; //輸出的值為72，原因在於上一行的$K的值已是36，所以會累加上去(即36+36)
    ?>
  </body>
</html>
