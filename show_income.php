<?php
include("check_session.php");
include("connection.php");
$query = "SELECT * FROM income_description";
$data = mysqli_query($conn, $query);
// $total = mysqli_num_rows($data);
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
?>
<!-- end header section -->

<!-- main content section -->

<div class="col-md-12">
    <div class="btn-area">
        <form action="selected_date_income.php" method="post">
            <input class="btn-float-left" type="date" name="date1" value="">
            <input class="btn-float-left" type="date" name="date2" value="">
            <input class="btn btn-primary btn-float-left" type="submit" name="submit" value="Search">
        </form>
    </div>

   <!--  <div class="dropdown btn-area">
    <select name="forma" onchange="location = this.value;" class="btn btn-primary dropdown-toggle btn-float-right" data-toggle="dropdown">
        <option value="show_income.php" selected> Total Income </option>
        <option value="week_income.php"> This Week </option>
        <option value="month_income.php"> This Month </option>
        <option value="year_income.php"> This Year </option>
    </select>
    </div> -->

    <div class="col-md-12">
    <div class="btn-area">
        <form action="selected_income_source.php" method="post">
            <input type="text" name="income" value="" placeholder="input income source">
            <input class="btn btn-primary" type="submit" name="submit" value="Search">
        </form>
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
                                <th colspan="4" style="text-align: center;">Total Income List</th>
                            </tr>
                        </thead>
                        <thead>
                            <tr>
                                <th>SL</th>
                                <th>Income Source</th>
                                <th>Taka</th>
                                <th>Date Time</th>
                            </tr>
                        </thead>

                        <?php
                        $amount = [];
                        while ($result = mysqli_fetch_assoc($data)) { ?>
                        <tbody>
                            <tr>
                                <td><?php echo $result['id']; ?></td>
                                <td><?php echo $result['income_source']; ?></td>
                                <td><?php echo $result['amount'].' '.'Taka'; ?></td>
                                <td><?php echo $result['date_time']; ?></td>
                                <?php $amount[] = $result['amount']; ?>
                            </tr>
                        </tbody>

                   <?php } ?>
                   <th colspan="2">Total Income</th>
                   <th colspan="2">

                    <?php
                    echo array_sum($amount).' '.'Taka';
                    ?>
                        
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