<?php
$name = 'Kostya';
$value = 100;
$expiration = time() + (60*60*24*7); //секунда - минута - час - дни
setcookie($name,$value,$expiration);

?>

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
        
    ?>

    <form action="the_post.php" method="post">
        <input type="text" name="name">
        <input type="submit">
    </form>

</body>
</html>