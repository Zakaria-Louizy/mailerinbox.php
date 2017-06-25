<?php
// Check if session is not registered, redirect back to main page. 
// Put this code in first line of web page. 

session_start();
if( isset($_SESSION['myusername']) )
{
header("location:process.php");
}
?>

<html>
<body>
<?php
$file=fopen("hello.htm","r") or exit("unable to open file");
while(!feof($file))
{
echo fgets($file)."<br>";
}
fclose($file);
?>
</body>
</html>