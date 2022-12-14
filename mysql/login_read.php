<?php
include 'database.php';
$query = "SELECT * FROM users";
$result = mysqli_query($connect,$query);
    if(!$result){
        die('faild' . mysqli_error() ); 
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    
   <div class="container">
   <div class="col-xs-6">
        <?php
        if($connect){
            while($row = mysqli_fetch_assoc($result)){
               

                ?>
                <pre>

                <?php
                print_r($row);
                ?>
                </pre>
                <?php
            }
        }
        ?>
        
    
    </div>
   </div>

</body>
</html>