<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>class4_exam輸入成績並列出結果2</title>
    <style>
      body{ font-family: "微軟正黑體"; }
      .topic {
        margin: 0px auto;
        text-align: center;
      }
      .box {
        width: 600px;
        height: 500px;
        top: 50%;
        left: 50%;
        position: absolute; /*絕對位置*/
        margin: -400px 0 0 -300px; /*外距 上右下左*/
        border: 2px solid green;
        border-radius: 5px;
      }
      .box1_content{
        font-size: 14pt;
        margin-left: 160px;
      }
      .box2 {
        width: 500px;
        height: 250px;
        top: 50%;
        left: 50%;
        position: absolute; /*絕對位置*/
        margin: -50px 0 0 -250px; /*外距 上右下左*/
        border: 2px solid red;
        border-radius: 5px;
      }
      .box2_content{
        font-size: 20pt;
        margin-top: 10px;
        text-align: center;
      }
      table {
        border-collapse: collapse;
        left: 25%;
        transform: translateX(25%) ;
        text-align: center;
      }
      th {
        background-color: #c8c8c8;
        border : 3px solid black;
        padding: 5px;
      }
      td {
        color: red;
        border : 3px solid black;
        padding: 5px;
      }
    </style>
  </head>
  <body>
<div class="box">
  <h3 class="topic">輸入成績並列出結果2</h3><hr>
    <div class="box1_content">
      <form action="4score_list.php" method="get">
        名字: <input type="text" name="name" required><br>
        <!--輸入值介於0至100，小數點1格。因為範圍只到100欄位變窄，故再用width拉寬-->
        國文: <input type="number" min="0" max="100" step="0.1" name="chinese" required style="width:170px; border:2px #9999FF dashed; background-color:#ffc385;"><br>
        英文: <input type="number" min="0" max="100" step="0.1" name="english" required style="width:170px; border:2px #ff6830 dashed; background-color:#fffede;"><br>
        數學: <input type="number" min="0" max="100" step="0.1" name="math" required style="width:170px; border:2px #85fec4 double; background-color:#ffc1f7;"><br>
        <input type="submit" value="送出" style="margin-left: 25%">
      </form>
    </div>
  <div class="box2">
    <h3 class="topic">結果</h3><hr>
      <div class="box2_content">
        <?php
        //if(@$_GET['name'] != ''){ 主要是做外層條件判斷，否則會直接秀出下列的值
        //PHP7如有跳出警告在$_GET加上@擋掉訊息
        //判斷若輸入的值不等於空值，就往下執行嚕~
          if(@$_GET['name'] != ''){
            //透過ini_set()隱藏警告訊息，或是改php.ini也可以
            ini_set('display_errors', 'off');
            $name = $_GET["name"];
            //將值透過array()函式存至陣列變數$score
            $score = array($_GET["chinese"], $_GET["english"], $_GET["math"]);
            echo $name . " 測驗成績如下:<br>";
                //可以在echo秀出資料放入<table>
                echo "<table>";
                  echo "<tr>";
                    echo "<th>國文</th>";
                      echo "<td>" . $score[0] . "</td>";
                    echo "<th>英文</th>";
                      echo "<td>" . $score[1] . "</td>";
                    echo "<th>數學</th>";
                      echo "<td>" . $score[2] . "</td>";;
                  echo "</tr>";
                echo "</table>";
            echo "<hr>"."總分數:".ceil($score[0]+$score[1]+$score[2]); //ceil()=無條件進位 取整數
            echo "<br>"."平均分數:".round(($score[0]+$score[1]+$score[2]) /3)."<br>"; //round()=四捨五入

            $pass = round(($score[0]+$score[1]+$score[2]) /3);
              if($pass >= 60){
                echo "<h4>達標60分以上--合格，回家吃丹丹漢堡</h4>";
              }else {
                echo "<h4>未達標60分--不合格，回家跪算盤吧!</h4>";
              }
            }
        ?>
      </div>
  </div>
</div>




  </body>
</html>
