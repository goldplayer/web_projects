<?php include 'functions.php' ?>
<?php if(isset($_POST['update'])){updateData();}  ?>
<?php include 'include/header.php';?>
       <div class="container mt-4">
        <h1>Update Page</h1>
        <form action="login_update.php" method="post">
                <div class="form-group">
                    <label for="my-input">Username</label>
                    <input id="my-input" class="form-control" type="text" name="name">
                </div>
                <div class="form-group">
                    <label for="my-input">Password</label>
                    <input id="my-input" class="form-control" type="password" name="password">
                </div>
                <div class="form-group">
                    <select name="id" id="">
                        <?php showData(); ?>   
                    </select> 
                </div>
                <div class="form-group mt-4">
                    <button type="submit" name="update" class="btn btn-primary">Create</button>
                </div>
            </form>
       </div>
<?php include 'include/footer.php';?>