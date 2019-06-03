<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>6 自訂函式-變動長度參數列</title>
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
<?php
  function showcar(){
    $k = func_num_args(); //取得參數個數
    if($k == 0){
      echo "沒有資料"."<br/>";
    } else{
      echo "本車行品牌有：";
  			$carbrand = func_get_args(); //將函式的所有參數轉為陣列回傳
  			foreach ($carbrand as $data){
  				echo $data."，";
  			}
        echo "<hr>";
  			echo "第一筆值為：".@func_get_arg($k-3)."。<br />"; //取得函式某一筆資料($k取得值為3，減掉3剩0，0為第一筆值)
        print($k);
    }
  }

  showcar();
  showcar("NISSAN","BMW","MAZDA"); //列出三個品牌作為參數，然後呼叫函式
 ?>




  </body>
</html>
