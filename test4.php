<?php
include("connection.php");
$date = date("Y-m-d");
$query = "SELECT * FROM INCOME_DESCRIPTION WHERE date_time= '$date'";
$data = mysqli_query($conn, $query);

while ($result = mysqli_fetch_assoc($data)) {
	print_r('('.$result['date_time'].')');
}
?>