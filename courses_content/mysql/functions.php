<?php
    include 'db.php';
    function createUser(){
        if(isset($_POST['create'])){
            global $conn;

            $username = $_POST['name'];
            $password = $_POST['password'];

            $username = mysqli_real_escape_string($conn,$username);
            $password = mysqli_real_escape_string($conn,$password);

            // хеширование пароля
            $hashFormat = "$2y$10$";
            $salt = "kamacodergoodplayer411";
            $hashF_and_salt = $hashFormat . $salt;
            $password = crypt($password,$hashF_and_salt);
            // хеширование пароля

            $query = "INSERT INTO users2(username,password) VALUE ('$username','$password')";

            $result = mysqli_query($conn,$query);

            if(!$result){
                die('Failed' . mysqli_error($conn));
            }else{
                echo 'Succsessfull';
            }
        }


    }


    function showData(){
        global $conn;

        $query = "SELECT * FROM users2";
        $result = mysqli_query($conn,$query);

        while($row = mysqli_fetch_assoc($result)){
            $id = $row['id'];
            echo "<option value='$id'>$id</option>";
        }
    }

    function updateData(){
     
            global $conn;

            $username = $_POST['name'];
            $password = $_POST['password'];
            $id = $_POST['id'];
          
//            $query = "UPDATE users2 SET";
//            $query .= "username = '$username',";
//            $query .= "password = '$password'";
//            $query .= "WHERE id = $id";
            $query = "UPDATE users2 SET username = '$username', password = '$password'  WHERE id = '$id'";
            $result = mysqli_query($conn,$query);
            if(!$result){
                die('Failed' . mysqli_error($conn));
            } else{
                echo "Perfect";
            }
        
    }

function deleteData(){
    global $conn;
    $id = $_POST['id'];

    $query = "DELETE FROM users2 WHERE id = '$id'";
    $result = mysqli_query($conn,$query);
    if(!$result){
        die('Failed' . mysqli_error($conn));
    }else{
        echo "Good";
    }
}


?>