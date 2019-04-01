<?php
// include("check_session.php");
include("connection.php");
$query = "SELECT *,sum(`amount`) as total_amount FROM income_description";
$data = mysqli_query($conn, $query);
// $total = mysqli_num_rows($data);

?>


<?php
// $amount = [];
while ($result = mysqli_fetch_assoc($data)) {
	//print_r(array ($result['amount']));
	// $amount[] = $result['amount'];
	echo $result['total_amount'];
}

// echo array_sum($amount);

?>