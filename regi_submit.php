<?php
mysql_connect("localhost","root","");//functionname(hostname,username,password)
mysql_select_db("aman")or die(mysql_error());


$username=$_POST["username"];
$password=$_POST["password"];
$name=$_POST["name"];
$email=$_POST["email"];
$gender=$_POST["gender"];
$city=$_POST["city"];
$address=$_POST["address"];
$language=$_POST["language"];
$language_new= implode(",",$language);
$img=$_FILES["filetoUpload"]["name"];
//$img=$_FILES["filetoUpload"]["size"];
//$img=$_FILES["filetoUpload"]["type"];
//$img=$_FILES["filetoUpload"]["tmp_name"];


move_uploaded_file($_FILES["filetoUpload"]["tmp_name"],"pic/$img");

$sql="insert into account (uname,password,name,email,gender,city,address,language,Image)
values('$username','$password','$name','$email','$gender','$city','$address','$language_new','$img')";
$data=mysql_query($sql) or die(mysql_error());

if($data)
{
  echo "REGISTERED SUCCESSFULLY";
}
else
{
	echo "datanotinsert";
}
?>