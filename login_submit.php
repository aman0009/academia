<?php   
session_start();       
mysql_connect("localhost","root","");
mysql_select_db("aman") or die(mysql_error());

$username=$_POST["username"];
$password=$_POST["password"];

$sql="select * from academia where username='$username' and password='$password'";
$result=mysql_query($sql) or die(mysql_error());
$total_row=mysql_num_rows($result); //get number of rows in result
$row=mysql_fetch_array($result);
$id=$row["id"];
$_SESSION["sid"]=$id;
if($total_row>0)
{
header("location:home.php"); //using get method
}
else{
header("location:login.php?sms=INVALID USERNAME OR PASSWORD");
}
?> 
