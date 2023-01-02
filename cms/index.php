<?php include "includes/db.php"; ?>
<?php include "includes/functions.php"; ?>
<?php include "includes/header.php"; ?>

    <div id="wrapper">
        <div class="container">
            <div class="caption_block">
                <h1>Home</h1>
                <hr>
            </div>
            <div class="row mt-4">
                <div class="col-md-8 blog_view">
                <?php 
                
              
                $query_post = "SELECT * FROM posts";
                $result_query_post = mysqli_query($connect,$query_post);
            
            
                while($row = mysqli_fetch_array($result_query_post)){
                    $get_post_id = $row['id_post'];
                    $post_heading = $row['post_name'];
                    $post_creator = $row['creater'];
                    $post_date = $row['create_date'];
                    $post_image = $row['post_image'];
                    $post_content = $row['post_content'];
                    $post_tags = $row['post_tags'];
              
            

                ?>
                     <div class="card" >
                        <div class="card-header">
                            <a href="post.php?p_id=<?php echo $get_post_id; ?>" class="card-title"><?php echo $post_heading ?></a> 
                            <h6 class="user">by <?php echo $post_creator ?></h6>
                            <span class="data"><?php echo $post_date ?></span>
                        </div>
    
                        <div class="card-body">
                            <img src="upload_images/<?php echo $post_image; ?>" class="card-img-top" alt="not found">
                            <hr>
                            <p class="card-text"><?php echo $post_content ?></p>
                            <hr>
                           
                        </div>

                        <div class="card-footer">
                            <a href="#" class="btn btn-primary">ReadMore</a>
                            <span class="tags"><?php echo $post_tags ?></span>
                        </div>
                    </div>



                <!-- close loop -->
                  <?php  
                  }
                ?>
                <!-- close loop -->
                </div>
                <!-- include right sidebar -->
                <?php include "includes/sidebar.php"?>
                 <!-- include right sidebar -->
            </div>
        </div>
    </div>
<?php include "includes/footer.php";?>