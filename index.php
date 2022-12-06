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

    $res = 0;

    $first_value = rand(-10,10);
    $second_value = rand (0,10);

    $res = $first_value + $second_value * (pow($second_value,2));

    if($res >= 0) {
        echo $first_value." and ".$second_value."=".$res;
    }else{
        echo "$res and $first_value";
    }


?>
         

</body>
</html>