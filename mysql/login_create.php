<?php include 'functions.php'?>
<?php createUser(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
<body>
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
</body>
</html>