<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CMS</title>
</head>
<body>
    <?php
        
    function array_fill_rand_number($range, $min=false, $max=false){
        $range = (int)$range;
        $arr = array();

        if($min !== false && $max !==false){
            $min = (int)$min;
            $max = (int)$max;

            for($i=0;$i<$range;$i++){
                $arr[$i] = rand($min,$max);
            }
        }else{
            for($i=0;$i<$range;$i++){
                $arr[$i] = rand();
            }
        }
        return $arr;
    }
    echo "<prev>";
    $print_array_function = array_fill_rand_number(10, 0,50);
    print_r($print_array_function);


    ?>
</body>
</html>