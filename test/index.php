<?php
    $num1 = $_POST['number1'];
    $num2 = $_POST['number2'];
    $num1 = intval($num1);
    $num2 = intval($num2);
    if ($num1 > $num2){
        $result = "{$num1}は{$num2}より大きい";
    } else {
        $result = "{$num1}は{$num2}より小さい";
    }


?>
<!DOCTYPE html>
    <head> 
        <meta http-equiv="Content-Type"
            content="text/html; charset=UTF-8" /> 
        <title>form</title>
    </head>
    <body>
        <h1>Hello PHP!</h1>
        <form method="post" action="./index.php">
            <input type="text" name="number1">
            <input type="text" name="number2">
            <input type="submit">
            <?php echo $result ?>
        </form>
    </body>
</html>
