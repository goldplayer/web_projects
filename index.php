<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HandMade CMS</title>
</head>
<body>
    <?php 
       
        $sentence = 23;

        if($sentence < 10){
            echo "I love PHP";
        }elseif($sentence < 15){
            echo "I love PHP";
        }else{
            echo "I love PHP <br> <br>";
            // echo "First excersice";
        }



        for($i = 0; $i <=10; $i++){
            echo $i . "<br>";
        }


        switch ($sentence){
            case 23:
                echo "this is it 11 man";
                break;
            case 20:
                echo "this is it man";
                break;
            case 11:
                echo "this is it man";
                break;
            case 23:
                echo "this is it man";
                break;
            case 10:
                echo "this is it man";
                break;
        }
    ?>
</body>
</html>