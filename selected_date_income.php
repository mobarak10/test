<?php
include("check_session.php");
include("connection.php");

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



<div class="col-md-12">


    <div class="btn-area">
        <form action="selected_date_income.php" method="post">
            <input class="btn-float-left" type="date" name="date1" value="" placeholder="from date">
            <input class="btn-float-left" type="date" name="date2" value="" placeholder="To date">
            <input class="btn btn-primary btn-float-left" type="submit" name="submit" value="Search">
        </form>
    </div>

    <div class="btn-area">
        <form action="selected_income_source.php" method="post">
            <input type="text" name="income" value="" placeholder="input income source">
            <input class="btn btn-primary" type="submit" name="submit" value="Search">
        </form>
    </div>

   <!--  <div class="btn-area">
        <a href="week_income.php" class="btn btn-primary btn-float-right">This Week</a>
        <a href="month_income.php" class="btn btn-primary btn-float-right">This Month</a>
        <a href="year_income.php" class="btn btn-primary btn-float-right">This Year</a>
    </div> -->
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th colspan="4" style="text-align: center;">Total This date Income List</th>
                            </tr>
                        </thead>
                        <thead>
                            <tr>
                                <th>Income</th>
                                <th>Date</th>
                                <th>Amount</th>
                            </tr>
                        </thead>

                        <?php
                        if (isset($_POST['submit'])) {
                            $date1 = $_POST['date1'];
                            $date2 = $_POST['date2'];
                            $query = "SELECT * FROM income_description where date_time>='$date1' AND date_time<='$date2'";
                            $data = mysqli_query($conn, $query);
                            $amount = [];
                            while ($result = mysqli_fetch_assoc($data)) { ?>
                            <tbody>
                                <tr>
                                    <td><?php echo $result['income_source']; ?></td>
                                    <td><?php echo $result['date_time']; ?></td>
                                    <td><?php echo $result['amount']; ?></td>
                                    <?php $amount[] = $result['amount']; ?>
                                </tr>
                            </tbody>
                       <?php }
                        }

                 ?>

                   <th colspan="2">Total This Week Income</th>
                   <th>
                        <?php echo array_sum($amount).' '.'Taka'; ?> 
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