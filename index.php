<?php include("check_session.php"); ?>
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
<?php
include("header.php");
?>
<!-- end header section -->

<!-- main content section -->
<div id="main-content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="content-btn">
                    <a href="add_income.php" class="btn btn-success">Add Income</a>
                    <a href="add_expense.php" class="btn btn-success">Add Expense</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end main content section -->

<!-- footer section -->
<?php
include("footer.php");
?>
<!-- end footer section -->
php
    <!-- all optional script -->
    <script src="js/jQuery v3.3.1.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/fontawesome/js/all.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>