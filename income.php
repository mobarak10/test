<?php
include("check_session.php");
include("connection.php");
include("flash_messages.php");

if (isset($_POST['submit'])) {
	$income = $_POST['income'];
	$amount = $_POST['money'];
	$date = $_POST['date'];

	if ($income!="" && $amount!="") {
		$query = "INSERT INTO `income_description`(`income_source`, `amount`, `date_time`) VALUES ('$income', '$amount', '$date')";
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