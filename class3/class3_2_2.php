<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>3.2 變數、資料型別</title>
  </head>
  <body>
    <?php
      $skypp = "我叫做全域變數"; //此行是全域變數
      echo $skypp . "<br />"; //呼叫全域變數的值

      function postkt(){ //寫在函式內的則是區域變數
          $skypp = "區域變數你好，我是kt棧長";
          echo $skypp . "<br />";
      }
      postkt();
      //可知，寫在function方法裡的變數，僅能在該區域使用
    ?>
    -----------------------------------------------<br />
    <?php
      $skypp = postkt();
      echo $skypp;
      //將函式儲存至新的變數，所秀出的內容仍為該區域變數裡的值
    ?>
  </body>
</html>
