<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Expendeture Service</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendor/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/responsive.css">
</head>
<body>
    
<!-- header section -->
<header>
    <div class="container">
        <div class="row">
            <div class="col-md-2">
                <div class="logo">
                    <img src="images/logo.png" alt="logo images">
                </div>
            </div>
            <div class="col-md-10">
                <div class="template-title">
                    <h1>Daily Cost Management [DCM]</h1>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- end header section -->

<!-- main content section -->
<div id="main-content">
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="login-area shadow">
                    <form action="loginbac.php" method="post">
                        <div class="login-image">
                            <img src="images/login.png" alt="Avatar" class="avatar">
                        </div>
                    
                        <div class="button-form">
                            <label><b>Username</b></label>
                            <input class="form-control" type="text" placeholder="Enter Username" name="username" required>
                    
                            <label><b>Password</b></label>
                            <input class="form-control" type="password" placeholder="Enter Password" name="password" required>
                    
                            <input class="btn btn-primary" type="submit" name="submit" value="Login">
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
</div>
<!-- end main content section -->

<!-- footer section -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="footer-content">
                    <p>All Rights Reserved | Copyright &copy; 2019</p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- end footer section -->

    <!-- all optional script -->
    <script src="js/jQuery v3.3.1.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/fontawesome/js/all.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>