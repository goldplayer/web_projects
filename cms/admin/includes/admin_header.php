<!doctype html>
<html lang="en">

<?php include "../includes/db.php" ?>
<?php include "functions.php" ?>

<?php ob_start(); ?>

<head>
  <title>Admin Page</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <link rel="stylesheet" href="./css/main_admin.css">
</head>

<body>
<header>
        <div class="container-fluid">
            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid">
                  <a class="navbar-brand" href="../index.php">Admin Page @Author@</a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarText">
                  
                    <div class="functions_btn">
                   
                        <div class="user_btn">
                            <button type="button" class="btn_user dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                <box-icon name='user' ></box-icon>
                              </button>
                              <ul class="dropdown-menu dropdown-menu-end">
                                <li><button class="dropdown-item" type="button"> <box-icon name='user-circle' ></box-icon> Profile</button></li>
                                <li><button class="dropdown-item" type="button"><box-icon name='log-out' ></box-icon> Log Out</button></li>
                                
                              </ul>
                        </div>
                    
                  </div>
                </div>
              </nav>
        </div>
  </header>
 