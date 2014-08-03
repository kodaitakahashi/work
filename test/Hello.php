<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8"/>
    <title>Document</title>
  </head>
  <body>
<p>
<?php
  date_default_timezone_set('Asia/Tokyo');
  $h = date("H");
  if ($h < 10) {
    echo '<img src="img/asa.jpg" alt="朝"> おはようございます';
  } elseif ($h < 18) {
    echo '<img src="img/hiru.jpg" alt="昼"> こんにちは';
  } else {
    echo '<img src="img/yoru.jpg" alt="夜"> こんばんは';
  }
?>
</p>
  </body>
</html>
