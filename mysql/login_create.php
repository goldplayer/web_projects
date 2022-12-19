<?php include 'functions.php'?>
<?php session_start(); $_SESSION['create'] = createUser(); ?>
<?php include 'include/header.php';?>

       <div class="container mt-4">
        <h1>Create User</h1>
        <form action="login_create.php" method="post">
                <div class="form-group">
                    <label for="my-input">Username</label>
                    <input id="my-input" class="form-control" type="text" name="name">
                </div>
                <div class="form-group">
                    <label for="my-input">Password</label>
                    <input id="my-input" class="form-control" type="password" name="password">
                </div>
                <div class="form-group mt-4">
                    <button type="submit" name="create" class="btn btn-primary">Create</button>
                    <a href="./login_update.php">Update Page</a>
                </div>
            </form>
       </div>

       
<?php include 'include/footer.php';?>