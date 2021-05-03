<?php
session_start();
$uname = $_GET['username'];
$pass = $_GET['password'];
$servername = "localhost";
$username = 'root';
$password='';
$conn = new mysqli( $servername, $username, $password, 'login');

if ($conn->connect_error){
   die("Connection Faild:" . $conn->connect_error);
}

$sql="SELECT * FROM users WHERE username = '$uname' AND Password = '$pass'" ;
$result = mysqli_query($conn , $sql);
$check = mysqli_fetch_array($result);


if(isset($check)){
   $_SESSION["username"] = $uname;
                            $_SESSION["id"] = $pass;
                            $_SESSION["loggedin"] = true;
   header("location: welcome.php");
}else{
 echo 'failure';
}
?> 



		