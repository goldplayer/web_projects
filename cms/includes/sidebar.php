<div class="col-md-4 right_side_menu">
    <div class="search_block">
        <h4>Blog Search</h4>
        <form method="post" action="search.php"> <!-- search.php  -->
        <div class="input-group">
            <input name="search" type="text"  class="form-control" >
            <span class="input-group-btn">
                <button class="btn btn-default" type="submit" name="submit">
                    <box-icon name='search-alt'></box-icon>
                </button>
            </span>
        </div>
        </form> <!-- Search form -->
    </div>


    <!-- Category -->
    <div class="category_block">
        <!--  -->
        <?php
            $query = "SELECT * FROM category";
            $category_select = mysqli_query($connect, $query);
        ?>
        <!--  -->
        
        <h4>Category</h4>
        <div class="row">
            <div class="col-lg-6">
                <ul style="list-style: none; padding:0;" class="category_list">

                    <?php 
                       while ($row = mysqli_fetch_array($category_select)){
                            $category_title = $row['name_category'];
                            $cat_id = $row['id'];
                            echo "<li class='nav-link'><a class='nav-link' href='categories.php?category=$cat_id'>{$category_title}</a></li>";
                        }
                    ?>
                </ul>
            </div>
        </div>
    </div>
    <!-- Category  -->

    <?php include "includes/widget.php" ?>
</div>