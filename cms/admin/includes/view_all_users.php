
<table class="table table-hover">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Username</th>
        <th scope="col">First Name</th>
        <th scope="col">Second Name</th>
        <th scope="col">Email</th>
        <th scope="col">Role</th>
        <th scope="col">Date</th>
        <!-- <th scope="col">Delete</th> -->
        </tr>
    </thead>
    <tbody>


        <?php

        $qry_users = "SELECT * FROM user";
        $select_comments = mysqli_query($connect, $qry_users);
        
        while($row = mysqli_fetch_assoc($select_comments)){
            //  $id_p = $row['id_post'];
                $user_id = $row['user_id'];
                $user_login = $row['user_login'];
                $user_firstname = $row['user_firstname'];
                $user_lastname = $row['user_lastname'];
                $user_email = $row['user_email'];
                $user_role = $row['user_role'];
                $user_img = $row['user_avatar'];
                $create_date = $row['create_date'];
                // $comments_date = $row['comments_date'];
            

            
        
                echo "<tr>";
                echo "<td scope='row'>{$user_id}</td>";
                echo "<td class='post_title_column'>{$user_login}</td>";
               
                
                // $query = "SELECT * FROM category WHERE id = {$post_category}";
                // $category_select_id = mysqli_query($connect, $query);
                
                // while ($row = mysqli_fetch_array($category_select_id)){
                // $id_category = $row['id'];
                // $category_title = $row['name_category'];

                // echo "<td> {$category_title}</td>";
                // }

                echo "<td class='post_title_column'>{$user_firstname}</td>";
                echo "<td class='post_title_column'>{$user_lastname}</td>";
                echo "<td class='post_title_column'>{$user_email}</td>";
                echo "<td class='post_title_column'>{$user_role}</td>";
                echo "<td class='post_title_column'>{$create_date}</td>";
                // echo "<td>{$comments_status}</td>";
                // /*----------------------*/
                //     $post_title_query = "SELECT * from posts WHERE id_post = $comments_post_id";
                //     $check_query = mysqli_query($connect, $post_title_query);

                //     if(!$check_query){
                //         die('die' . mysqli_error($connect));
                //     }

                //     while($row = mysqli_fetch_assoc($check_query)){
                //         $post_id = $row['id_post'];
                //         $post_name = $row['post_name'];
                //         // echo post name wich equals comments
                //         echo "<td><a href='../post.php?p_id=$post_id'>$post_name</a></td>";
                //     }
                // /*----------------------*/
                // echo "<td>{$comments_date}</td>";

             

                // echo "<td><a href='comments.php?approve=$comments_id'>Approve</a></td>";
                // echo "<td><a href='comments.php?unapprove=$comments_id''>UnApprove</a></td>";


                // echo "<td><a href='comments.php?delete=$comments_id'>Delete</a></td>";
                // echo "<td><a href='post.php?source=edit_post&p_id='>Edit</a></td>";
            }
        ?>
        
    </tbody>
    </table>

