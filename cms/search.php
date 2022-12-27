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
                
                if(isset($_POST['submit'])){
                    $search = $_POST['search'];
                    $query = "SELECT * FROM posts WHERE post_tags LIKE '%$search%' ";
                    $search_query = mysqli_query($connect,$query);
        
        
                    if(!$search_query){
                        die("QUERY FAILED" . mysqli_error($connect));
                    }
        
                    $count = mysqli_num_rows($search_query);
        
                    if($count == 0){
                       echo " <div class='alert'>
                       
                                    К сожалению такого параметра ' $search '  нет в нашей базей данных, возможно вы имели ввиду что-то другое,
                              </div>
                     ";
                    }else{
         
                
                
                    while($row = mysqli_fetch_array($search_query)){
                        $post_heading = $row['post_name'];
                        $post_creator = $row['creater'];
                        $post_date = $row['create_date'];
                        $post_image = $row['post_image'];
                        $post_content = $row['post_content'];
                        $post_tags = $row['post_tags'];
                  
                
    
                    ?>
                         <div class="card" >
                            <div class="card-header">
                                <h5 class="card-title"><?php echo $post_heading ?></h5> 
                                <h6 class="user">by <?php echo $post_creator ?></h6>
                                <span class="data"><?php echo $post_date ?></span>
                            </div>
        
                            <div class="card-body">
                                <img src="images/<?php echo $post_image; ?>" class="card-img-top" alt="not found">
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
                   
                    }
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