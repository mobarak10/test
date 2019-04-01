<?php
include ("connection.php");
$query = "SELECT * FROM income_description";
$data = mysqli_query($conn, $query);


$amount = [];
while ($result = mysqli_fetch_assoc($data)) {
	$amount[] = $result['amount'];

}
echo array_sum($amount);
?>