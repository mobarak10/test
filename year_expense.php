<?php
include("check_session.php");
include("connection.php");

$query = "SELECT *
FROM `expense_description`
WHERE YEAR(date_time) = YEAR(CURRENT_DATE())";
$data = mysqli_query($conn, $query);
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
<?php
include("header.php");
?>

<div class="col-md-4 btn-float">
    <div class="btn-area">
        <a href="week_expense.php" class="btn btn-primary">This Week</a>
        <a href="month_expense.php" class="btn btn-primary">This Month</a>
        <a href="year_expense.php" class="btn btn-primary">This Year</a>
    </div>
</div><br><br><br><br>


<div id="main-content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="income-table mt-5">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th colspan="4" style="text-align: center;">This Year Expense List</th>
                            </tr>
                        </thead>
                        <thead>
                            <tr>
                                <th>Expense</th>
                                <th>Date</th>
                                <th>Amount</th>
                            </tr>
                        </thead>

                        <?php
                        $amount = [];
                        while ($result = mysqli_fetch_assoc($data)) { ?>
                        <tbody>
                            <tr>
                                <td><?php echo $result['expense_source']; ?></td>
                                <td><?php echo $result['date_time']; ?></td>
                                <td><?php echo $result['amount']; ?></td>
                                <?php $amount[] = $result['amount']; ?>
                        </tbody>

                   <?php } ?>

                   <th colspan="2">Total This Year Expense</th>
                   <th>
                       <?php echo array_sum($amount).' '.'Taka'; ?>
                   </th>
                        
                    </th>
                    </table>
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

    <!-- all optional script -->
    <script src="js/jQuery v3.3.1.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/fontawesome/js/all.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>