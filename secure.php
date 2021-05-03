<?php
$uname = $_GET['username'];
$pass = $_GET['password'];
$servername = "localhost";
$username = 'root';
$password='';
$conn = new mysqli( $servername, $username, $password, 'test');

if ($conn->connect_error){
   die("Connection Faild: " . $conn->connect_error);
}

//$stmt = dbConnection -> prepare "SELECT * FROM login WHERE username = '$username' AND Password = '$pass'" ;
$stmt= dbConnection -> prepare; "SELECT * FROM users WHERE username = '$username' AND Password = '$password'" ;
$stmt->bind_param('s' , $uname ); // 's' specifies the variable type = 'string'
$stmt->bind_param('s' , $pass );
$stmt->execute();
$check = mysqli_fetch_array($result);
$result = $stmt->get_result();

if(isset($check)){
echo 'success';
}else{
 echo 'failure';
}
?>



		