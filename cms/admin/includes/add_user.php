
<?php


if(isset($_POST['create_post'])){

    $post_title = $_POST['post_name'];
    $category = $_POST['category'];
    $creator = $_POST['creator'];
    $status = $_POST['status'];

    $image = $_FILES['img']['name'];
    $post_image_temp = $_FILES['img']['tmp_name'];

    $post_tags = $_POST['tags'];
    $post_content = $_POST['post_content'];
    $post_date = date('d-m-y');
    // $post_comment_count = 4;


    move_uploaded_file($post_image_temp, "../upload_images/$image");


    $post_qry = "INSERT INTO posts(category_id, post_name, creater, create_date, post_image, post_content,post_tags,post_status)";
    $post_qry .= "VALUE('{$category}','{$post_title}', '{$creator}',now(),'{$image}','{$post_content}','{$post_tags}','{$status}')";

    $post_qry_request = mysqli_query($connect,$post_qry);
    confirm($post_qry_request);
}

?>

<form class="row g-3" method="post" enctype="multipart/form-data">

  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Post Title</label>
    <input type="text" class="form-control" id="post_name" name="post_name">
  </div>

  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Category</label>
    <select class="form-select"  name="category" id="category">
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
    <input type="text" class="form-control" id="creator" name="creator">
  </div>

  <div class="col-md-6">
    <label for="inputCity" class="form-label">Status</label>
    <input type="text" class="form-control" id="status" name="status">
  </div>

  <!-- <div class="col-md-4">
    <label for="inputState" class="form-label">Status</label>
    <select id="inputState" class="form-select">
      <option selected>Choose...</option>
      <option>...</option>
    </select>
  </div> -->

  <div class="mb-3">
  <label for="formFile" class="form-label">Image</label>
  <input class="form-control" type="file" id="file" name="img">
</div>

  <div class="col-md-12">
    <label for="inputZip" class="form-label">Post Tags</label>
    <input type="text" class="form-control" id="Tags" name="tags">
  </div>

  <div class="col-md-12">
        <label for="my-textarea">Post Content</label>
        <textarea id="my-textarea" class="form-control" name="post_content" rows="5" ></textarea>
  </div>

  <div class="col-12">
    <button type="submit" class="btn btn-primary" name="create_post">Create</button>
  </div>
</form>