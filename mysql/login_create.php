<?php

 include 'database.php';
    $user_name = $_POST['username'];
    $pass = $_POST['password'];


    if(isset($_POST['submit'])){
        $query = "INSERT INTO users (username,password)";
        $query .= "VALUES ('$user_name','$pass')";
        $result = mysqli_query($connect,$query);
    }else{
        die("Failed");
    }

        // echo "We`re have good connection";

?>