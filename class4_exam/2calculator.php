<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>class4_exam計算機2</title>
    <style>
      body{ font-family: "微軟正黑體"; }
      .topic {
        margin: 0px auto;
        text-align: center;
      }
      .box1 {
        width: 600px;
        height: 250px;
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
        height: 100px;
        top: 50%;
        left: 50%;
        position: absolute; /*絕對位置*/
        margin: 5px 0 0 -250px; /*外距 上右下左*/
        border: 2px solid red;
        border-radius: 5px;
      }
      .box2_content{
        color: red;
        font-size: 20pt;
        margin-top: 10px;
        text-align: center;
      }
    </style>
  </head>
  <body>
    <div class="box1">
      <h3 class="topic">用switch做的計算機</h3><hr>
        <div class="box1_content">
        <form action="2calculator.php" method="post">
          <!--這裡放上step="0.001"是讓欄位可輸入小數點-->
          數值1: <input type="number" step="0.001" name="num1" required>
          <select name="calculator">
          　<option value="+">+</option>
          　<option value="-">-</option>
          　<option value="*">x</option>
          　<option value="/">÷</option>
          </select>
          <br>
          數值2: <input type="number" step="0.001" name="num2" required><br>
          <input type="submit" value="計算" style="margin-left: 20%">
          <input type="reset" value="重算">
        </form>
        </div>
      <div class="box2">
        <h3 class="topic">結果</h3><hr>
          <div class="box2_content">
            <?php
              //透過ini_set()隱藏警告訊息，或是改php.ini也可以
              ini_set('display_errors', 'off');
              $n1 = $_POST["num1"];
              $n2 = $_POST["num2"];
              $calc = $_POST["calculator"];
              switch ($calc) {
                case '+':
                  echo $n1 + $n2;
                  break;
                case '-':
                  echo $n1 - $n2;
                  break;
                case '*':
                  echo $n1 * $n2;
                  break;
                case '/':
                  echo $n1 / $n2;
                  break;
                default:
                  echo "";
                  break;
              }
            ?>
          </div>
      </div>
    </div>




  </body>
</html>
