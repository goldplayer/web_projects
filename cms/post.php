<?php include "includes/db.php"; ?>
<?php include "./admin/functions.php"; ?>
<?php include "includes/header.php"; ?>
<div class="wrapper">
    <div class="container">
        <div class="row">
        <div class="caption_block mt-5">
                <h1>Post Page  </h1>
                <hr>
            </div>
            <div class="col-mg-8 col-xs-8 col-lg-8">
            <?php 
                
              if(isset($_GET['p_id'])){
                $the_post_id = $_GET['p_id'];
              }
                $query_post = "SELECT * FROM posts WHERE id_post = $the_post_id";
                $result_query_post = mysqli_query($connect,$query_post);
        
        
            while($row = mysqli_fetch_array($result_query_post)){
                $post_id = $row['id_post'];
                $post_heading = $row['post_name'];
                $post_creator = $row['creater'];
                $post_date = $row['create_date'];
                $post_image = $row['post_image'];
                $post_content = $row['post_content'];
                $post_tags = $row['post_tags'];
          
        

            ?>
              <div class="post_single_block">
                <div class="header_post_single_block">
                    <h1><?php echo $post_heading ?></h1>
                    <p>Автор: <a href=""><?php echo $post_creator ?></a></p>
                    <small>Опубликовано: <?php echo $post_date ?></small> 
                </div>


                <div class="image_post_single_block">
                    <img src="upload_images/<?php echo $post_image; ?>" class="card-img-top" alt="not found">
                </div>
              </div>

              <div class="content_post_single_block">
                <div class="text_block">
                    <p><?php echo $post_content  ?></p>
                </div>
              </div>


            <!-- close loop -->
              <?php  
              }
            ?>

            <!-- comments -->

           

                <div class="comments_block">
                    <h3 class="mb-4">Оставьте свой комментарий для этого поста</h3>
                    <?php
                      if(isset($_POST['send_comment'])){
                        $the_post_id = $_GET['p_id'];
                        $comment_author = $_POST['com_author'];
                        $comment_email = $_POST['com_email'];
                        $comment_content = $_POST['com_text'];


                        $query_com = "INSERT INTO comments (comments_post_id,comments_author,comments_email,comments_content, comments_status, comments_date)";
                        $query_com .= "VALUES ($the_post_id, '{$comment_author}', '{$comment_email}', '{$comment_content}','unapproved', now())";


                        $query_create_comm = mysqli_query($connect, $query_com);
                        confirm($query_create_comm);

                      }             
                    ?>
                  <form action="" method="post" class="send_comment" role="form">
                  <div class="form-floating mb-3">
                        <input type="text" name="com_author" class="form-control" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput">Author</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="email" name="com_email" class="form-control" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput">Email address</label>
                    </div>
                    <div class="form-floating">
                        <textarea class="form-control" name="com_text" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                        <label for="floatingTextarea2">Comments</label>
                      </div>
                      <div class="form-floating mt-3">
                        <input class="btn btn-primary" type="submit" value="Send Comment" name="send_comment">
                      </div>
                  </form>
                </div>
                <div class="comments_area">
                    <hr>
                        <div class="comments_user_block">
                            <div class="avatar">
                                <img src="https://png.pngtree.com/png-vector/20191101/ourmid/pngtree-cartoon-color-simple-male-avatar-png-image_1934459.jpg" alt="">
                            </div>
                            <div class="comments_user_block_content">
                                <div class="comment_header">
                                    <h3>Jacob</h3>
                                    <small>September 25. 2010 at 4:30 PM</small>
                                </div>
                                <div class="comment_text">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto, rerum.</p>
                                </div>
                            </div>
                        </div>
                    <hr>
                  </div>
            </div>
            <?php include "includes/sidebar.php"?>
        </div>
      
    </div>
</div>



<?php include "./includes/footer.php"?>