<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>5 初探陣列2</title>
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
<?php
  $k[0][0] = 'KT棧長';
  $k[0][1] = '100';
  $k[0][2] = '90';

  $k[1]['姓名'] = '左宗糖';
  $k[1]['生命力'] = '80';
  $k[1]['戰鬥力'] = '70';

  //使用"數值"來秀出索引鍵的值
  echo $k[0][0]."、".$k[0][1]."、".$k[0][2]."<br/>";
  //使用"字串"來秀出索引鍵的值
  echo $k[1]['姓名']."、".$k[1]['生命力']."、".$k[1]['戰鬥力']."<br/>";
?>
  </body>
</html>
