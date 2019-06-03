<?php
/*自訂一個產生亂數碼的傳參函式*/
function make_random_pass($num){
  $random = "0123456789@&_abcdefghijklmnopqrstuvwxyz";
  //建立一個空的字串來儲存亂數密碼
  $str ="";
  //當空字串$str小於我們傳入的參數時，開始往下執行迴圈
  while(strlen($str)<$num){
    //substr(存取字串的變數, 由哪個字元開始擷取, 取出幾個字元)
    //rand()，代表由0-z之間，填入9表示剃除0-8從9到z來做為開端
    //strlen()計算出$random內的字串長度
    //最後的1，代表取的一個字元後，再合併到$str直到字數符合傳入參數值(我指定5)，
    $str .= substr($random, rand(9,strlen($random)), 1);
  }
  return($str);
}
?>

<?php
  //輸入參數8，呼叫出隨機密碼
  $result = make_random_pass(8);
  //設定帳號值
  $account = "ktman";
  //表單送出的參數值，存入$check
  @$check = $_POST["check"];
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>6 自訂函式-亂數函式(自動產生亂碼)</title>
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
  <form action="" method="POST">
    <?php
    if(isset($check) && ($check != $account)){
      echo $check."這帳號有錯誤！";
    } elseif($check == $account) {
      echo "新密碼 : ".$result;
    } else {
        echo "";
    }
    ?>
    <table border="1">
      <tr>
        <td>輸入帳號</td>
        <td><input type="text" name="check" required></td>
      </tr>
      <tr>
        <td colspan="2">
          <input type="submit" value="送出">
          <input type="reset" value="重設">
        </td>
      </tr>
    </table>
  </form>
  </body>
</html>
