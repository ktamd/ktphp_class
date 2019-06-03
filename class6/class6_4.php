<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>6 自訂函式-回傳值(return指令)</title>
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
  <?php
  /*回傳值(return指令)*/
  //return指令會讓函式停止運行，且會將設好的"回傳值"傳回方法
  //傳入參數-乘法計算
   function calc($num){
     if($num == 0){
       echo "什麼都沒有";
     }else {
       return $num * $num * $num;
     }
   }

   $result = calc(3); //參數為3
   echo $result. "<hr>"; //直接用echo calc(3); 結果是一樣的
  ?>

  <?php
  //傳入參數-三個數值比大小
  function compare($k1, $k2, $k3){
      if($k1 >= $k2 && $k1 >= $k3){
        //當k1大於等於k2.k3就回傳
        return $k1;
      } elseif($k2 >= $k1 && $k2 >=$k3) {
        //當k2大於等於k1.k3就回傳
        return $k2;
      } else {
        //若都沒達到上述兩個條件就回傳k3
        return $k3;
      }
  }
  echo compare(60, 80, 50); //傳入參數
  ?>

  <hr>
  <?php
  //傳入參數-賦值運算(先增加，後乘)
  function get_datas($q){
    $datas = 5;
      if ($q != 0){
        $datas += $q;
        // 15*15=225
        return $datas * $datas;
      }
      else{
        echo "程式有錯誤";
      }
  }
  echo get_datas(10);
  ?>

  <hr>
  <?php
  //呼叫方法內的陣列-無使用return
  function all_data(){
    $date = date("Y-m-d H:i:s"); //時間的函式("年-月-日 時-分-秒")
    $charactor = array( array('name' =>'毛胖胖' ,'blood' =>'100' ,'power' =>'60'),
                      array('name' =>'老蔣' ,'blood' =>'88' ,'power' =>'96'));

    for($i=0; $i<2;  $i++){
      echo "名字是 ".$charactor[$i]['name']."，"
           ."生命值是 ".$charactor[$i]['blood']."，"
           ."戰鬥指數是 ".$charactor[$i]['power']."<br>";
    }
    echo "紀錄時間: ".$date;
  }
  all_data();
  ?>
  <hr>
  <!--以下是實務上棧長常用的方式-->
  <!--套入到table(或是div)來擺放皆可-->
  <?php
  //呼叫方法內的陣列-使用return
  function pooh(){
    $charactor = array( array('name' =>'習包子' ,'skill' =>'扛二百斤麥子10里山路不換肩'),
                        array('name' =>'維尼熊' ,'skill' =>'震攝14億人民的恐怖角色'));
    //一定要用return指令否則會出錯
    return $charactor;
  }
  ?>
  <?php $winnie = pooh();?>
  <table border="1">
    <?php foreach ($winnie as $k => $v):?>
    <tr>
      <td><?php echo $v['name'];?></td>
      <td><?php echo $v['skill'];?></td>
    </tr>
  <?php endforeach; ?>
  </table>
  </body>
</html>
