<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>3.3 運算子&amp;運算式</title>
  </head>
  <body>
    <?php
    /*比較 運算子*/
    $k=10; //數值
    $t="10"; //字串
    var_dump($k == $t); // 回傳 true 因為型別會自動轉換
    echo "<br>";
    var_dump($k === $t); // 回傳false 因為型別不相等
    echo "<br>";
    var_dump($k != $t); // 回傳 false 因為型別會自動轉換，所以$k"並非"不等於$t
    echo "<br>";
    var_dump($k !== $t); // 回傳 true 因為型別不相等，所以$k"是"不等於$t
    echo "<hr>";

    $a=30;
    $b=40;
    var_dump($a <> $b);
    echo "<br>";
    var_dump($a <  $b);
    ?>
  </body>
</html>
