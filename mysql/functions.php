<?php
    include 'db.php';
    function createUser(){
        if(isset($_POST['create'])){
            global $conn;

            $username = $_POST['name'];
            $password = $_POST['password'];
            
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
          
            $query = "UPDATE users2 SET";
            $query .= "username = '$username'";
            // $query .= "password = '$password'";
            $query .= "WHERE id = $id";

            $result = mysqli_query($conn,$query);
            if(!$result){
                die('Failed' . mysqli_errno($conn));
            } 
        
    }


?>