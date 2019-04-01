<!-- backend for login page -->
<?php
session_start();
include("connection.php");

if (isset($_POST['submit'])) {
  $user = $_POST['username'];
  $pass = $_POST['password'];
  $query = "SELECT * FROM admin WHERE username='$user' && password='$pass'";
  $data = mysqli_query($conn, $query);
  $result = mysqli_num_rows($data);

  if ($result == 1) {
    $_SESSION['user_name']=$user;
    header("location:index.php");
  }else{
    echo "<script>alert('Password or Username is incorrect');</script>";
      echo "<script>window.open('login.php','_self')</script>";
  }
}
?>