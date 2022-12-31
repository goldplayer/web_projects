
<?php

if(isset($_GET['p_id'])){
$the_post_id = $GET['p_id'];
}

$qry = "SELECT * FROM posts";
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

}


?>



<form class="row g-3" method="post" enctype="multipart/form-data">

  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Post Title</label>
    <input type="text" class="form-control" id="post_name" name="post_name">
  </div>

  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Category</label>
    <input type="text" class="form-control" id="category" name="category">
  </div>

  <div class="col-md-6">
    <label for="inputCity" class="form-label">Author</label>
    <input value="<?php echo $post_author; ?>" type="text" class="form-control" id="creator" name="creator">
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