<?php
include("index.php");
$con=mysqli_connect("127.0.0.1","root");
//create database
$sql="CREATE DATABASE vulnerawa";


if(mysqli_query($con,$sql))
{
echo "Database vulnerawa created successfully..";
}

else
{
echo " Error creating database:" .mysqli_error($con);
}

$con2=mysqli_connect("127.0.0.1","root","","vulnerawa");
//create table
$sql2="CREATE TABLE users
(
PID INT NOT NULL AUTO_INCREMENT,
PRIMARY KEY(PID),
Username VARCHAR(30),
Password VARCHAR(40),
Role CHAR(30)
)";

if(mysqli_query($con2,$sql2))
{
echo "Table users created successfully.";
}

else
{
echo " Error creating table users:" .mysqli_error($con2);
}
 
$con3=mysqli_connect("127.0.0.1","root","","vulnerawa");
//mysqli_query("vulnerawa");
//insert data into table

//mysqli_query($con3, "INSERT 
//INTO users (pid, `Username`, `Password`,`Role`) VALUES(1,'admin','E10ADC3949BA59ABBE56E057F20F883E,'PHP Expert'), 
//(2,'user1','5F4DCC3B5AA765D61D8327DEB882CF99','Network Support'),(3,'user2', 'F25A2FC72690B780B2A14E140EF6A9E0','user2'");

/*$sql3=mysqli_query($con3,"INSERT INTO users 
(pid, `Username`, `Passowrd`, `Role`) VALUES(1,'admin','E10ADC3949BA59ABBE56E057F20F883E','PHP Expert'),
(2,'user1','5F4DCC3B5AA765D61D8327DEB882CF99','Network Support'),(3,'user2', 'F25A2FC72690B780B2A14E140EF6A9E0','user2')  ");*/  

$sql3="insert into users(pid,username,password,role) VALUES (1,'admin','123456','PHP Expert'),
(2,'user1','password','Network Support'),(3,'user2', 'iloveyou','user2')  ";

if (!mysqli_query($con3,$sql3))
{
echo "Error inserting data." .mysqli_error($con3);
}

else
{
    echo("success");
mysqli_close($con3);
}




?>