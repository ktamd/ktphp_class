<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>5 一維陣列1</title>
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
  <?php
    /****以下$box、$running部分，皆屬賦值型態的一維陣列****/
    //以數值作為索引鍵，[]代表由0開始遞增下去
    $box[] = 'Selena';
    $box[] = 'Hebe';
    $box[] = 'Ella';
    //使用"數值"作為索引鍵，來秀出索引鍵的字串鍵值
    for($i=0; $i<3;  $i++){
      echo $box[$i]."、";
    }
  ?>
  <hr>

  <?php
    //以字串作為索引鍵
    $running['kt'] = '2000';
    $running['man'] = '1600';
    $running['woman'] = '800';
    //使用"字串"作為索引鍵，來秀出索引鍵的數值鍵值
    echo "男生要跑: ".$running['man']."公尺<br/>";
    echo "女生要跑: ".$running['woman']."公尺<br/>";
    //重點:要把陣列變數放到雙引號內的話，必須要用{}大括號包起來
    echo "KT棧長要跑:  {$running['kt']}"."公尺<br/>";
  ?>

  </body>
</html>
