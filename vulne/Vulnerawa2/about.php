<html>
<head bg color="black">
<title>shunya.com</title>
<h1><center>Welcome to Vulnerawa</center></h1>
</head>
<body bgcolor="black">
<p align="center"><font color="#1ec503" size="4"><b>Vulnerawa is a vulnerable webapp to simulate a real website  
</p>
<p align="center"> 
So many websites still suffer from error based SQL injection. 
</p>
<p align="center"> By the way, let's find out about developers of Vulnerawa below.</p>
<center>
<b> Vulnerawa's founders.<br></b>
<?php
    // Suppress Notice warnings, has nothing to do with our tutorial.
    error_reporting (E_ALL ^ E_NOTICE);
     
    // Open a connection and Select the database
  $con=mysqli_connect("localhost", "root", "")or die(mysql_error());
    mysqli_select_db($con,vulneraw)or die(mysql_error());
     
    $id=$_GET['id'];
  //  $id=mysqli_real_escape_string($con,$id);
     
if(!isset($id))
          {
            $req=mysqli_query($con,"select pid from users");
            while($row=mysqli_fetch_assoc($req))
                {
                    print "<a href=about.php?id=$row[pid] > Founder $row[pid]</a></br>";
                }
        }
    else
        {
            $req=mysqli_query($con,"select username,role from users where pid='$id'")or 
     die($req. "<br/><br/>".mysqli_error($con));
            $row=mysqli_fetch_row($req);
             
            print "User details : </br>$row[0] </br>$row[1]";
             
        } 
?>
</body>
</html>