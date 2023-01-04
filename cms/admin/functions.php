<?php 
function confirm($result){
    global $connect;
    if(!$result){
        die('failed' . mysqli_error($connect));
    }
    // return $result;
}

function AddCategory(){

    global $connect;

    if(isset($_POST['submit'])){
        $category_name = $_POST['cat_name'];
    
        if($category_name == "" || empty($category_name)){
            echo "You field is empty";
        }else{
          $query = "INSERT INTO category(name_category)";
          $query .= "VALUE ('{$category_name}')";
          $result = mysqli_query($connect, $query);
    
          if(!$result){
            die('Error' . mysqli_error($connect));
          }
        } 
      }    
}

function getAllCategory(){
    global $connect;
    $query = "SELECT * FROM category";
    $category_select = mysqli_query($connect, $query);
      while ($row = mysqli_fetch_array($category_select)){
           $id_category = $row['id'];
           $category_title = $row['name_category'];
           echo "
           
               <tr>
                 <th scope='row'>{$id_category}</th>
                 <td>$category_title</td>
                 <td><a href='categories.php?delete={$id_category}'>Delete</a></td>
                 <td><a href='categories.php?edit={$id_category}'>Edit</a></td>
               </tr>
            
           ";
        }
}


function deleteCategory(){
    global $connect;

    if(isset($_GET['delete'])){
        $delete_category = $_GET['delete'];
        $query = "DELETE FROM category WHERE id = {$delete_category}";
        $delete_query = mysqli_query($connect, $query);

        if(!$delete_category){
            die("Erorr" . mysqli_error($connect));
        }
        header("Location: categories.php");
    }
}

function updateCategory(){
    global $connect;
    if(isset($_GET['edit'])){
        $category_id = $_GET['edit'];
        $query = "SELECT * FROM category WHERE id = $category_id ";
        $category_select_id = mysqli_query($connect, $query);
        
        while ($row = mysqli_fetch_array($category_select_id)){
        $id_category = $row['id'];
        $category_title = $row['name_category'];
        ?>
    
            <input type="text" class="form-control" name="cat_name" value="<?php if(isset($category_title)){echo $category_title; } ?>">
        
        <?php }}?>

        <?php
        // update query
        if(isset($_POST['edit_category'])){
        $update_category = $_POST['cat_name'];
        $query = "UPDATE category SET name_category = '{$update_category}' WHERE id = {$category_id}";
        $update_query = mysqli_query($connect, $query);
        if(!$update_query){
            die("Failed query" . mysqli_error($connect)); 
        }
        // header("Location: categories.php");
    }
}







function deletePost(){
    global $connect;

    if(isset($_GET['delete'])){
        $id_post = $_GET['delete'];
        $delete_qry = "DELETE FROM posts WHERE id_post = {$id_post}";

        $result_delete_qry = mysqli_query($connect, $delete_qry);

        if(!$result_delete_qry){
            die('failed' . mysqli_error($connect));
        }
        header("Location: post.php");
    }
}


function delete_Comments(){
    global $connect;

    if(isset($_GET['delete'])){
        $the_comments_id = $_GET['delete'];

        $delete_comm_qry = "DELETE FROM comments WHERE comments_id = $the_comments_id";

        $result_delete_comments_query = mysqli_query($connect,$delete_comm_qry);

        if(!$result_delete_comments_query){
            die('die' . mysqli_error($connect));
        }
        header("Location: comments.php");

        
    }
}


function Edit_Comments_Status(){
    global $connect;
    
    if(isset($_GET['approve'])){
        $the_comments_id = $_GET['approve'];

        $qry = "UPDATE comments SET comments_status = 'approved' where comments_id = $the_comments_id";
        $approve_query = mysqli_query($connect, $qry);
        if(!$approve_query){die('die' . mysqli_error($connect));}

        header("Location: comments.php");
    }elseif(isset($_GET['unapprove'])){
        $the_comments_id = $_GET['unapprove'];

        $qry = "UPDATE comments SET comments_status = 'unapproved' where comments_id = $the_comments_id";
        $approve_query = mysqli_query($connect, $qry);
        if(!$approve_query){die('die' . mysqli_error($connect));}

        header("Location: comments.php");
    }
}


?>