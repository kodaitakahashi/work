<?php
$f = fopen("count.txt", "r+");
$c = fgets($f, 10);
$c = $c + 1;
fseek($f, 0);
fputs($f, $c);
fclose($f);
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8"/>
    <title>Document</title>
  </head>
  <body>
    <p>
      あなたは<?php echo $c; ?>人目のお客様ですね
  </body>
</html>
