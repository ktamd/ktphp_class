<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>4 條件控制&amp;迴圈</title>
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <?php
      /*基本迴圈*/
      //觀念-> for(初始值; 設定值的範圍; 遞增或遞減運算子)
      for($t=1; $t<5; $t++){
        echo "$t";
      }
    ?>
    <hr>

    <?php
      /*迴圈內作條件判斷*/
      //透過for迴圈來遞增取值
      for ($k=0; $k<=10 ; $k++) {
        //當遞增的值，除以3之後，餘數不等於0就會秀出
        //結果就是3,6,9不會出現
        if ($k % 3 != 0) {
          echo "$k".",";
        }
      }
    ?>
    <hr>

    <?php
      //巣狀迴圈-印出99乘法表
      //斷行須放在外部迴圈，若是放在內部跑會變成1*1=1斷行1*2=2斷行..依此類推
      for ($x=1; $x<10 ; $x++) {
        for ($y=1; $y<10 ; $y++) {
            echo "|"."$x*$y=". $x*$y."&nbsp";
        }
        echo "<br/>";
      }
    ?>
    <hr>

    <?php
      //透過for迴圈從陣列變數中取值
      //$name[]，陣列變數這裡的索引鍵是從0開始，而kt棧長代表0
      $name[] ="kt棧長";
      $name[] ="麥噹噹";
      $name[] ="啃GG";
      for ($z=0; $z<count($name) ; $z++) {
        echo "$name[$z]".",";
      }
      //可以透過print_r()函式做檢查，將陣列變數的值一一秀出
      echo "<br/>";
      print_r($name);
    ?>

  </body>
</html>
