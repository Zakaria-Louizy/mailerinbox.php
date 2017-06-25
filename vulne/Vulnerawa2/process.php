<?php
session_start();
ob_start();
$host="127.0.0.1"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="vulnerawa"; // Database name 
$tbl_name="users"; // Table name 

// Connect to server and select database.
$connect=mysqli_connect("$host", "$username", "$password")or die("cannot connect"); 
$db=mysqli_select_db($connect,"$db_name")or die("cannot select DB");

// Define $myusername and $mypassword 
$myusername=$_POST['username']; 
$mypassword=($_POST['password']); 
//$mypassword=md5($mypassword);
//$myusername = mysqli_real_escape_string($connect,$myusername);
//$mypassword = mysqli_real_escape_string($connect,$mypassword);

//$sql="SELECT * FROM $tbl_name WHERE username='$myusername' and password='$mypassword'";

$result=mysqli_query($connect,"SELECT * FROM $tbl_name WHERE username='$myusername' and password='$mypassword'")
 or die('Error:' .mysqli_error($connect));


// Mysql_num_row is counting table row
$count=mysqli_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row
if($count==0){

echo "Wrong Username or Password";
}
else {
// Register $myusername, $mypassword and redirect to file "login_success.php"
$_session['myusername']=$username;
$_session['mypassword']=$password; 
header("Location:login_success.php");
}
ob_end_flush();
?>

