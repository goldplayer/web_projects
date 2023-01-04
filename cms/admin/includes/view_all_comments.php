
<table class="table table-hover">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Author</th>
        <th scope="col">Comment</th>
        <th scope="col">Email</th>
        <th scope="col">Status</th>
        <th scope="col">Post Current</th>
        <th scope="col">Date</th>
        <th scope="col">Approve</th>
        <th scope="col">Unapprove</th>
        <th scope="col">Delete</th>
        <!-- <th scope="col">Delete</th> -->
        </tr>
    </thead>
    <tbody>


        <?php

        $qry_comments = "SELECT * FROM comments";
        $select_comments = mysqli_query($connect, $qry_comments);
        
        while($row = mysqli_fetch_assoc($select_comments)){
            //  $id_p = $row['id_post'];
                $comments_id = $row['comments_id'];
                $comments_post_id = $row['comments_post_id'];
                $comments_author = $row['comments_author'];
                $comments_content = $row['comments_content'];
                $comments_email = $row['comments_email'];
                $comments_status = $row['comments_status'];
                $comments_date = $row['comments_date'];
            

            
        
                echo "<tr>";
                echo "<td scope='row'>{$comments_id}</td>";
                echo "<td class='post_title_column'>{$comments_author}</td>";
                echo "<td class='post_title_column'>{$comments_content}</td>";
                
                // $query = "SELECT * FROM category WHERE id = {$post_category}";
                // $category_select_id = mysqli_query($connect, $query);
                
                // while ($row = mysqli_fetch_array($category_select_id)){
                // $id_category = $row['id'];
                // $category_title = $row['name_category'];

                // echo "<td> {$category_title}</td>";
                // }

                echo "<td class='post_title_column'>{$comments_email}</td>";
                echo "<td>{$comments_status}</td>";
                /*----------------------*/
                    $post_title_query = "SELECT * from posts WHERE id_post = $comments_post_id";
                    $check_query = mysqli_query($connect, $post_title_query);

                    if(!$check_query){
                        die('die' . mysqli_error($connect));
                    }

                    while($row = mysqli_fetch_assoc($check_query)){
                        $post_id = $row['id_post'];
                        $post_name = $row['post_name'];
                        // echo post name wich equals comments
                        echo "<td><a href='../post.php?p_id=$post_id'>$post_name</a></td>";
                    }
                /*----------------------*/
                echo "<td>{$comments_date}</td>";

             

                echo "<td><a href='comments.php?approve=$comments_id'>Approve</a></td>";
                echo "<td><a href='comments.php?unapprove=$comments_id''>UnApprove</a></td>";


                echo "<td><a href='comments.php?delete=$comments_id'>Delete</a></td>";
                echo "<td><a href='post.php?source=edit_post&p_id='>Edit</a></td>";
            }
        ?>
        
    </tbody>
    </table>


    <?php 
        delete_Comments();
        Edit_Comments_Status();

    ?>