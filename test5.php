<?php
include("connection.php");

if (isset($_POST['submit'])) {
	$date1 = $_POST['date1'];
	$date2 = $_POST['date2'];
	$query = "SELECT * FROM income_description where date_time>='$date1' AND date_time<='$date2'";
	$data = mysqli_query($conn, $query);
	while ($result = mysqli_fetch_assoc($data)) {
	echo $result['date_time'].'<br>';
}
}

?>


<form method="post" action="">
	<input type="date" name="date1" value="">
	<input type="date" name="date2" value="">
	<input type="submit" name="submit" value="search">
</form>

