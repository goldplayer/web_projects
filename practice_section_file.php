<?php
    $speedre = "100km/h";
    session_start();
    $_SESSION['msg'] = 'Test practice';
    $time = time() + (60*60*24);
    setcookie('name', 'Value', $time )
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
            // if(isset($_GET['source'])){
            //     echo $_GET['source'];
            // }
                if(isset($_COOKIE['name'])){
                    echo $_COOKIE['name'];
                }

                if(isset($_SESSION['msg'])){
                    echo $_SESSION['msg'];
                }

        ?>
    <a href="practice_section_file.php?source=1999">Click me pls</a>

    <form action="the_post.php" method="post">
        <input type="text" name="name">
        <input type="submit">
    </form>

</body>
</html>