<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>5 陣列-修改及增加陣列</title>
    <link rel="stylesheet" href="css/style.css">
    </head>
<body>
  <?php
  // 建立一維陣列
  $amy = array(64, 65, 77, 55, 82);
  $lily = array(77, 81, 99, 66, 54);

  $amy[2] = 100;  //更改索引鍵值
  $lily[0] = 100;  //更改索引鍵值

  $amy = array_pad($amy, 6, 20); //由右增加鍵值(新增的第6科分數放到最後)
  $lily = array_pad($lily, -6, 20); //由左增加鍵值(新增的第6科分數放到開頭)


  // 將上面的一維陣列，存放至$scores建立二維陣列
  $scores = array($amy, $lily);


  // 用巢狀迴圈取值，並計算總分
  $total = 0;
  for ($k=0; $k<count($scores); $k++) { //$k = 0、1
     $summary = 0;
     for ( $i=0; $i<count($scores[$k]); $i++) { //$i = 0至5
        echo($scores[$k][$i]." ");
        $summary += $scores[$k][$i];
        $total += $scores[$k][$i];
     }
     echo("這六科成績小計: ".$summary."<br/>"); //個人六科總分放外層迴圈
  }
  echo("成績總分: ".$total."<br/>"); //2人的六科總分放到巢狀迴圈外面
  ?>

  </body>
</html>
