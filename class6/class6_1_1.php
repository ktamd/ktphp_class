<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>6 自訂函式-傳值呼叫及傳址呼叫</title>
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>

<?php
  //自訂函式-不帶參數
  //函式內秀出文字，並呼叫
  function welcome() {
    echo "KT客棧歡迎各位棧友的到來! <br/>";
  }

  welcome();
 ?>

 <?php
 //自訂函式-不帶參數
 //函式內寫入陣列，並呼叫
 function she() {
   $showlist = array('Selena' ,'Hebe' ,'Ella');
     foreach ($showlist as $key => $name) {
       echo $name."<br/>";
     }
 }

 she();
  ?>


<?php
  //自訂函式-帶參數
  /*
    使用自訂函式帶參數"並非是必要的"，但帶入參數可以增加函式的多變性
    若是函式沒帶參數，則僅會執行函式內的程式再返回原處。
  */
  //自訂函式所帶的參數(下方的$car)，正是我們自己帶入的自訂變數
  function  brand($car){
    echo  $car."<br/>";
  }

  brand("BENZ");
  brand("TOYOTA");
 ?>

 <?php
  //自訂函式-參數傳值呼叫(函式內外變數同名，互不影響)
  //程式中定義了一個變數而它與自訂函式中參數的變數同名，仍會視為不同的資料，互不干涉
  $kt = 5;
  function  house($kt){
   $kt = $kt+10;
   echo  "自訂函式的值 : ". $kt ."<br/>";
  }

   house($kt);
   echo "呼叫最上方的值 :". $kt ."<hr>"; //呼叫出來的最上方的變數，不會受到自訂函式中參數的同名變數而受到影響
  ?>


 <?php
  //自訂函式-參數傳址呼叫(函式內外變數同名，會影響)
  //參數前加入"&"符號，會將傳值呼叫變更為傳址呼叫
  //傳址呼叫會讓函式內外的變數，都因存入記憶體中的同一位址回傳給程式使用，而使資料(變數的值)同步
  $kt = 5;
  function  park(&$kt){
    $kt = $kt+10;
    echo  "自訂函式的值 : ". $kt ."<br/>";
  }

  park($kt);
  echo "第1次呼叫最上方的值 :". $kt ."<br/>";
  park($kt);
  echo "第2次呼叫最上方的值 :". $kt ."<br/>";
 ?>


  </body>
</html>
