<?php include 'database.php'?>
<?php include 'functions.php'?>
<?php

    if(isset($_POST['update'])){    
        get_data_for_update();
        
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
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <div class="container">
        <div class="col-xs-6">
            <form action="login_update.php" method="post" class="log_form">
                <div class="form-group">
                    <label for="username">UserName</label>                       
                    <input id="my-input" class="form-control" type="text" name="username" placeholder="username">
                </div>
                <div class="form-group"> 
                    <label for="password">Password</label>                      
                    <input id="my-input" class="form-control" type="password" name="password" placeholder="password">
                </div>

                <div class="form-group">
                    <select name="id" id="">
                        <?php showAllData()?>
                        <!-- <option value="">1</option> -->
                    </select>
                </div>
                <input type="submit" name="update" value="Update" class="submit_input">
            </form>
        </div>
    </div>


</body>
</html>