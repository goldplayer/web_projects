
<?php include "includes/admin_header.php"?>


<div id="wrapper">
  <div class="col-lg-12 col-xs-12 col-md-12">
      <div class="row">
          <div class="col-md-2 menu">
              <?php include "includes/admin_navigation.php" ?>
            </div>

            <div class="col-md-10">
              <div class="content">
                  <div class="caption_block">
                      <h1>All Comments</h1>
                      <small></small>
                  </div>
                  <div class="main_content">
                   
                      <?php 

                          if(isset($_GET['source'])){
                              $source = $_GET['source'];
                          }else{
                              $source = ""; 
                          }

                          switch($source){
                              
                              case 'add_post';
                                  include "includes/add_post.php";
                                  break;

                                  
                              case 'edit_post';
                                  include "includes/edit_post.php";
                                  break;

                                  default:
                                  include "includes/view_all_comments.php";
                                  break;
                          }

                        
                      
                      ?>
                  </div>
              </div>
            </div>
      </div>         
  </div>
</div>

<?php include "includes/admin_footer.php"?>