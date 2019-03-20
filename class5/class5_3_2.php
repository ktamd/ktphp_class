<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>5 二維陣列2</title>
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
<?php
  /****以下$station部分，屬於array()函式的二維陣列****/
  $station = array( array('姓名' =>'Selena' ,'生命力' =>'100' ,'戰鬥力' =>'60'),
                    array('姓名' =>'Hebe' ,'生命力' =>'70' ,'戰鬥力' =>'68'),
                    array('姓名' =>'Ella' ,'生命力' =>'88' ,'戰鬥力' =>'96'));



  /*範例1和範例2直接用迴圈取出外層索引和鍵值固然是OK，但是無法秀出內層索引
  但是範例3我們用巢狀迴圈的話，就可以撈出內層索引及鍵值了(要寫多維的就必須走巢狀迴圈)*/

    //範例1.使用for迴圈取出二維陣列的鍵值
    //將外層索引使用迴圈先取出，再分別羅列內層索引
    //此時的$i就是外層索引0、1、2，並透過內層索引帶出各別鍵值
    for($i=0; $i<3;  $i++){
      echo "名字是 ".$station[$i]['姓名']."，"  //呼叫外層索引0、1、2，依序取出內層索引的姓名(Selena、Hebe、Ella)
           ."生命值是 ".$station[$i]['生命力']."，" //呼叫外層索引0、1、2，依序取出內層索引的姓名(100.70.88)
           ."戰鬥指數是 ".$station[$i]['戰鬥力']."<br>"; //呼叫外層索引0、1、2，依序取出內層索引的姓名(60.68.96)
    }
    echo "<hr>";

    //範例2.使用for迴圈取出二維陣列外層索引和鍵值
    foreach ($station as $p=>$k) { //$p代表外層索引鍵[0]，$k['姓名']代表接收Selena、Hebe、Ella
      echo  $p.$k['姓名']."，".$k['生命力']."，".$k['戰鬥力']."<br>";
    }
    echo "<hr>";


    /*
    範例3和範例4的效果是一樣的，
    但您若將if的值改為由0改為1，會發生
     =>範例3的Selena、Hebe、Ella都失蹤了，範例4則是只有Selena失蹤
    或是您若將if的條件改為 ==，會發生
     =>範例3的Selena、Hebe、Ella會出現，範例4則是只有Selena出現
    */

    //範例3.使用巢狀迴圈取出二維陣列的"索引鍵和鍵值"
    //範例3的0代表姓名(Selena、Hebe、Ella)，1代表生命力(100.70.88)，2代表戰鬥力(60.68.96)
    //最後內層索引由0開始取出3人的內層索引鍵和鍵值(姓名、Selena)，接著是1開始取出3人的生命力及鍵值，2開始取出3人的戰鬥力及鍵值
    foreach ($station as $k) { //外層索引
      foreach ($k as $t => $pp) { //內層索引($t代表內層索引鍵[姓名]，$pp代表Selena)
        if($pp >= 0){
          echo $t.":".$pp."。";
        }
      }
    }
    echo "<hr>";

    //範例4-進階版.使用巢狀迴圈取出二維陣列
    //將預設的$rows來作為條件判斷，並帶入巢狀迴圈，再於內層迴圈用遞增帶出，將所有的值列出
    //範例4的0代表姓名Selena，1代表生命力100，2代表戰鬥力60，3代表姓名Hebe，4代表生命力70...以此類推
    $rows = 0;
    foreach ($station as $k) { //外圍陣列
      foreach ($k as $t  => $pp) { //內層陣列($t代表索引鍵[姓名]，$pp代表Selena)
          if ($rows >= 0) {
            echo $t.":".$pp."。";
          }
      $rows++; //藉由預設索引鍵使用遞增，來帶出每一個索引鍵值
      }
    }
  ?>

  </body>
</html>
