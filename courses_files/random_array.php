
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
    // получаем данные с формы
    
    if(isset($_POST['submite'])){
        $name = array("Kama","Kostya","sergey");
        $user = $_POST['username'];
        $password = $_POST['pass'];

        if(!in_array($user,$name)){ //если данных нет в массиве или в базе то выводим сообщение ниже
            echo 'Sorry this name not registered' . "<br>";
        }else{
            echo "Welcome" . "<br>";
        }
        
        if(strlen($user) > 20 || strlen($password) < 8){
            echo "Sry, your login or password not corrected" ."<br>";
        }else{
            echo "Name:" . $user ."<br>";
            echo "Password:" . $password . "<br>";
        }

    } 
?>

    <form action="random_array.php" method="POST">
        <input type="text" name="username" placeholder="Enter your name">
        <input type="password" name="pass" placeholder = "Enter you pass">
        <button type="submit" name="submite">Push</button>
    </form>
</body>
</html>