<?php

function showAllData(){
global $connect;
$query = "SELECT * FROM users"; //запрос к базе - выводит все елементы из базы
$result = mysqli_query($connect,$query);
    if(!$result){
        die('faild' . mysqli_error() ); 
    }

       
    while($row = mysqli_fetch_assoc($result)){
        $id = $row['id']; //Сюда передаем параметр из базы данных = название столбца
        echo "<option value='$id'>$id</option?>"; //здесь выводим 
    }
    
}



function get_data_for_update(){
    global $connect;
    $username = $_POST['username'];
    $password = $_POST['password'];
    $id = $_POST['id'];


    $update_query = "UPDATE `users` SET username = '$username', password = '$password' WHERE id = $id";
    $res = mysqli_query($connect,$update_query);
        if(!$res){
            die("QUERY FAILED" . mysqli_error($connect));
        }
}


?>