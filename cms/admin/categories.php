
  <?php include "includes/admin_header.php"?>

  
<div id="wrapper">
  <div class="row">
      <div class="col-md-2 menu">
        <?php include "includes/admin_navigation.php" ?>
      </div>
      <div class="col-md-10">
        <div class="content">
          <h1>Welcome to Categories page</h1>
            <h4>On this page you can add category</h4>
              <div class="row">
                <div class="col-xs-6 col-lg-12 col-md-12 categories_block">
                <?php 
                //INSERT
                AddCategory();
                ?>
                <!-- Insert category -->
                 <div class="add_category_block">
                  <h6>Add category</h6>
                  <form action="" method="post" class="add_category_form">
                    <div class="form-group">
                      <input type="text" class="form-control" name="cat_name">
                    </div>
                    <div class="form-group">
                      <input type="submit" class="add_category_btn" name="submit" value="Add">
                    </div>
                  </form>
                 </div>
                 <!-- Edit category -->
                 <div class="edit_category_block">
                  
                  <?php
                  
                    if(isset($_GET['edit'])){
                        $cat_id = $_GET['edit'];
                        include "includes/edit_categories.php";
                    }
                  
                  ?>
                 </div>
                </div>
              </div>

              <div class="row">
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Last</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php /* SELECT = function */ getAllCategory(); ?>
                  <?php /* DELETE = function */ deleteCategory(); ?>
                </tbody>
              </table>
              </div>
             
        </div>
      </div>
    </div>
</div>
<?php include "includes/admin_footer.php"?>