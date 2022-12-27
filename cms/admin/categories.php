
  <?php include "includes/admin_header.php"?>
  <?php
      $query = "SELECT * FROM category";
      $category_select = mysqli_query($connect, $query);
  ?>
  
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
                <div class="col-xs-6 ">
                  <form action="" method="post" class="add_category_form">
                    <div class="form-group">
                      <input type="text" class="form-control" name="category-name">
                    </div>
                    <div class="form-group">
                      <input type="submit" class="add_category" name="submit" value="Add">
                    </div>
                  </form>
                </div>
              </div>

              <div class="row">
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Handle</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                  </tr>
                </tbody>
              </table>
              </div>
             
        </div>
      </div>
    </div>
</div>

<?php include "includes/admin_footer.php"?>