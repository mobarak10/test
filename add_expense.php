<?php
include("check_session.php");
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
<?php
include("header.php");
include("flash_messages.php");
?>
<!-- end header section -->

<!-- main content section -->
<div id="main-content">
    <div class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="add-income shadow">
                    <?php echo FlashMessage::render(); ?>
                    <form action="expense.php" method="post">
                        <label class="mb-0">Expense Description</label>
                       <!--  <select class="form-control" name="expense">
                            <option value="Food">Food</option>
                            <option value="Transport">Transport</option>
                            <option value="Daily Shopping">Daily Shopping</option>
                            <option value="House Rent">House Rent</option>
                            <option value="Donate">Donate</option>
                            <option value="Marketing">Marketing</option>
                            <option value="Other">Other</option>
                        </select> -->
                        <input class="form-control" type="text" name="expense" value="">

                        <label class="mb-0">Amount</label>
                        <input class="form-control" type="text" name="money" value="">
                        <label class="mb-0">Date</label>
                        <input class="form-control" type="text" name="date" value="<?php echo date('Y-m-d') ?>">
                    
                        <input class="btn btn-secondary" type="submit" name="submit" value="Expense">
                    </form>
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
</div>
<!-- end main content section -->

<!-- footer section -->
<?php
include("footer.php");
?>
<!-- end footer section -->

    <!-- all optional script -->
    <script src="js/jQuery v3.3.1.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/fontawesome/js/all.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>