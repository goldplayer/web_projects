<?php

if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];    
    $connect = mysqli_connect('localhost', 'root', '', 'login_app');
    if($connect){
        echo "We`re connected ";
    }else{
        die("Database connection failed");
    }


    $query = "INSERT INTO users (user_name,password)";
    $query .= "VALUES ('$username', '$password')";

    $result = mysqli_query($connect,$query);
        if(!$result){
            die('faild' . mysqli_error() ); 
        }
}

?>