<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>class4_exam輸入成績並列出結果1</title>
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
    </style>
  </head>
  <body>
      <div class="box">
        <h3 class="topic">輸入成績並列出結果1</h3><hr>
          <div class="box1_content">
          <form action="3score_list.php" method="get">
            名字: <input type="text" name="name" required><br>
            國文: <input type="number" step="0.1" name="chinese" required><br>
            英文: <input type="number" step="0.1" name="english" required><br>
            數學: <input type="number" step="0.1" name="math" required><br>
            <input type="submit" value="送出" style="margin-left: 25%">
          </form>
          </div>
        <div class="box2">
          <h3 class="topic">結果</h3><hr>
            <div class="box2_content">
              <?php
                //if(@$_GET['name'] != ''){ 如果名字傳值不等於空值，便開始往下執行。主要是做外層條件判斷，否則會直接秀出下列的值
                //PHP7如有跳出警告在$_GET加上@擋掉訊息
                //判斷若輸入的值不等於空值，就往下執行嚕~
                if(@$_GET['name'] != ''){
                  ini_set('display_errors', 'off'); //透過ini_set()隱藏警告訊息，或是改php.ini也可以
                  $name = $_GET["name"];
                  $score = array($_GET["chinese"], $_GET["english"], $_GET["math"]);

                  echo $name . "<br>";
                  echo "國文 " . "英文 " . "數學<br>";
                  for ($k = 0; $k < count($score); $k++) { //count()= 取出陣列變數裡有幾筆資料
                    if($k != 0){ //不等於0，其他值就加逗號
                      echo " , ";
                    }
                    echo $score[$k];
                    }

                  $pass = round(($score[0]+$score[1]+$score[2]) /3); //round()= 四捨五入
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
