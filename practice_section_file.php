

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
            if(isset($_GET['source'])){
                echo $_GET['source'];
            }
        ?>
    <a href="practice_section_file.php?source=1999">Click me pls</a>

    <form action="the_post.php" method="post">
        <input type="text" name="name">
        <input type="submit">
    </form>

</body>
</html>