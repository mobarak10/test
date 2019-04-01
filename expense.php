<?php
include("check_session.php");
include("connection.php");
include("flash_messages.php");

if (isset($_POST['submit'])) {
	$expense = $_POST['expense'];
	$amount = $_POST['money'];
	$date = $_POST['date'];

	if ($expense!="" && $amount!="") {
		$query = "INSERT INTO `expense_description`(`expense_source`, `amount`, `date_time`) VALUES ('$expense', '$amount', '$date')";
		$data = mysqli_query($conn, $query);

		if ($data) {
			FlashMessage::add("<script>alert('Record added successfully');</script>");
                // echo "<script>alert('Record added successfully')</script>";
            header("location:add_income.php");
		}else{
			echo "data not inserted";
		}
	}
}
?>