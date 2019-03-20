<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>5 一維陣列2</title>
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
  <?php
    /****以下$store屬於array()函式的一維陣列****/
    //以數值作為索引鍵，array()包的是字串鍵值
    $store = array('丹丹漢堡', '啃GG', '麥噹噹');
    //使用"數值"作為索引鍵，來秀出索引鍵的字串鍵值
    echo $store[0]."<br/>";
    echo $store[1]."<br/>";
    echo $store[2]."<hr>";

    //您也可以使用foreach迴圈來秀出索引鍵的字串鍵值
    //這邊棧友們可以對照4.4 for迴圈中的最後一個範例，效果是相同的
    foreach($store as $taiwan){ //命名為$taiwan的陣列變數
      echo $taiwan."<br/>";
    }
    echo "<hr>";

    //等等...似乎有棧友懶得再回去爬4.4的文章..好啦..我直接寫吧
    for($k=0; $k<count($store); $k++){ //透過count()函式來取得索引鍵數量
      echo $store[$k]."<br/>";
    }
  ?>
  <hr>


  <?php
    /****以下$people屬於array()函式的一維陣列****/
    //以字串作為索引鍵，array()包的是索引鍵存取字串鍵值
    $people = array('name'=>'包青天',
                    'sex'=>'男',
                    'age'=>'18');
    //使用"字串"作為索引鍵，來秀出索引鍵的字串鍵值
    echo $people['name']."、".$people['sex']."、".$people['age'];
  ?>
  </body>
</html>
