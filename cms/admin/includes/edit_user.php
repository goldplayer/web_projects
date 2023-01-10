
<?php
 if(isset($_GET['p_id'])){
  $the_post_id = $_GET['p_id'];
  }


  $qry = "SELECT * FROM posts WHERE id_post = $the_post_id";
  $select_post_by_id = mysqli_query($connect, $qry);

  while($row = mysqli_fetch_assoc($select_post_by_id)){
      $id_p = $row['id_post'];
      $post_title = $row['post_name'];
      $post_category = $row['category_id'];
      $post_status = $row['post_status']; 
      $post_images = $row['post_image'];
      $post_tags = $row['post_tags'];
      $post_comment = $row['post_comment'];
      $post_author = $row['creater'];
      $post_date = $row['create_date'];
      $post_content = $row['post_content'];
  }


global $connect;
if(isset($_POST['update_post'])){
  $post_title = $_POST['post_name'];
  $post_category = $_POST['category_id'];
  $post_status = $_POST['status']; 
  $post_images = $_FILES['post_image']['name'];
  $post_images_temp = $_FILES['post_image']['tmp_name'];
  $post_tags = $_POST['post_tags'];
  $post_author = $_POST['creator'];
  // $post_content = mysql_real_escape_string($post_content);
  $post_content = $_POST['post_content'];
  // $_post_content = mysql_real_escape_string($post_contentost);


  move_uploaded_file($post_images_temp, "../upload_images/$post_images");

    if(empty($post_images)){
      $query = "SELECT * from posts where id_post = $the_post_id";
      $select_img = mysqli_query($connect, $query);
      
      while($row = mysqli_fetch_array($select_img)){
        $post_img = $row['post_image'];
      }
    }

  $query_insert_update = "UPDATE posts SET 
     post_name = '{$post_title}',
     category_id = '{$post_category}',
     create_date = now(),
     creater = '{$post_author}',
     post_status = '{$post_status}',
     post_tags = '{$post_tags}',
     post_image = '{$post_images}',
     post_content = '{$post_content}' 
     WHERE id_post = {$the_post_id};      
  ";

  $result_update = mysqli_query($connect, $query_insert_update);

  confirm($result_update);

} 


?>



<form class="row g-3" method="post" enctype="multipart/form-data">

  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Post Title</label>
    <input value="<?php echo $post_title; ?>" type="text" class="form-control" id="post_name" name="post_name">
  </div>

  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Category</label>
    <select class="form-select"  name="category_id" id="category_id">
        <?php 
          $query = "SELECT * FROM category ";
          $select_category = mysqli_query($connect, $query);

          while($row = mysqli_fetch_assoc($select_category)){
            $category_id = $row['id'];
            $category_title = $row['name_category'];

            echo "<option value ='{$category_id}'>{$category_title}</option>";
          }
        ?>
    </select>
  </div>

  <div class="col-md-6">
    <label for="inputCity" class="form-label">Author</label>
    <input value="<?php echo $post_author; ?>" type="text" class="form-control" id="creator" name="creator">
  </div>

  <div class="col-md-6">
    <label for="inputCity" class="form-label">Status</label>
    <input value="<?php echo $post_status; ?>" type="text" class="form-control" id="status" name="status">
  </div>

  <!-- <div class="col-md-4">
    <label for="inputState" class="form-label">Status</label>
    <select id="inputState" class="form-select">
      <option selected>Choose...</option>
      <option>...</option>
    </select>
  </div> -->

  <div class="mb-3">
  <label for="formFile" class="form-label">Default file input example</label>
  <img class="img-fluid" width="100px" src="../upload_images/<?php echo $post_images; ?>" alt="">
  <input class="form-control" type="file" id="formFile" name="post_image" required>
  
</div>

  <div class="col-md-12">
    <label for="inputZip" class="form-label">Post Tags</label>
    <input value="<?php echo $post_tags; ?>" type="text" class="form-control" id="Tags" name="post_tags">
  </div>

  <div class="col-md-12">
        <label for="my-textarea">Post Content</label>
        <textarea  id="my-textarea" class="form-control" name="post_content" rows="10"  ><?php echo $post_content;?></textarea>
  </div>

  <div class="col-12">
    <button type="submit" class="btn btn-primary" name="update_post">Create</button>
  </div>
</form>