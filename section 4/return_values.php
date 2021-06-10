<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    
    function addNumbers($number1, $number2){

        $sum = $number1 + $number2;
        
        return $sum;

    }
    $result = addNumbers(35,35);

    echo $result;

    echo "<br>";

    $result = AddNumbers(100, $result);
    
    echo $result;

    echo "<br>";

    $result = AddNumbers(200, $result);

    echo $result;
    ?>
</body>
</html>