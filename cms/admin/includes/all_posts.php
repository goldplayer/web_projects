<table class="table table-hover">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Title</th>
          <th scope="col">Category</th>
          <th scope="col">Status</th>
          <th scope="col">Images</th>
          <th scope="col">Tags</th>
          <th scope="col">Comments</th>
          <th scope="col">Author</th>
          <th scope="col">Create Date</th>
          <th scope="col">Delete</th>
        </tr>
      </thead>
      <tbody>


          <?php

              $qry = "SELECT * FROM posts";
              $select_post = mysqli_query($connect, $qry);
              
              while($row = mysqli_fetch_assoc($select_post)){
                    $id_p = $row['id_post'];
                    $post_title = $row['post_name'];
                    $post_category = $row['category_id'];
                    $post_status = $row['post_status'];
                    $post_images = $row['post_image'];
                    $post_tags = $row['post_tags'];
                    $post_comment = $row['post_comment'];
                    $post_author = $row['creater'];
                    $post_date = $row['create_date'];

                  
              
                      echo "<tr>";
                      echo "<td scope='row'>{$id_p}</td>";
                      echo "<td class='post_title_column'><a href='../post.php?p_id=$id_p'>$post_title</a></td>";


                      $query = "SELECT * FROM category WHERE id = {$post_category}";
                      $category_select_id = mysqli_query($connect, $query);
                      
                      while ($row = mysqli_fetch_array($category_select_id)){
                      $id_category = $row['id'];
                      $category_title = $row['name_category'];

                      echo "<td> {$category_title}</td>";
                      }
                      echo "<td>{$post_status}</td>";
                      echo "<td><img src='../upload_images/$post_images' class='post_small_img' alt='not found'></img></td>";
                      echo "<td>{$post_tags}</td>";
                      echo "<td>{$post_comment}</td>";
                      echo "<td>{$post_author}</td>";
                      echo "<td>{$post_date}</td>";
                      echo "<td><a href='post.php?delete={$id_p}'>Delete</a></td>";
                      echo "<td><a href='post.php?source=edit_post&p_id={$id_p}'>Edit</a></td>";
              
                  }

          
          ?>
          
      </tbody>
    </table>


      <?php 
          deletePost()
      ?>