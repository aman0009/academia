<?php
error_reporting(0);
if(isset($_POST["insert"]))
{
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
$mob="/^[789]{1}[0-9]{9}$/";

move_uploaded_file($_FILES["filetoUpload"]["tmp_name"],"pic/$img");
    //insert into tablename (data field value) values(variables in which values are stored)
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
}//isset function used here
?>
<html>
<head>
<title>Registration Form</title>
</head>

<body background="pic/t.jpg">           
<form action="registration.php" method="POST" enctype="multipart/form-data">
<ins><b> <h3 style="text-align:center;font-size:250%;"> REGISTRATION FORM </h3></b></ins></br></br>       
<table width="343" height="381" align="center">

            <tr>
              <td style="font-size:150%;">Username:</td> 
              <td><input type="text" name="username" placeholder="Username" /></td>
            </tr>
           
            <tr>
              <td style="font-size:150%;">Password:</td> <td><input type="password" name="password" placeholder="Password" /></td>
            </tr>
            <tr>
              <td style="font-size:150%;">Name:</td> 
              <td> <input type="text" name="name" placeholder="Name"/></td>
             </tr>
            
            <tr>
             <td style="font-size:150%;">Email:</td> 
              <td> <input type="text" name="email" placeholder="Email"/></td>
              </tr>
            
            <tr>
              <td style="font-size:150%;">Gender:</td>
                  <td style="font-size:110%;"> 
                    Male<input type="radio" name="gender" value="Male" />
                    Female<input type="radio" name="gender" value="Female" />
                   </td>
           </tr>            
            
            <tr>
              <td style="font-size:150%;">City:</td> 
              <td>
              <select name="city">
              <option>--select--</option>
              <option>Indore</option>
              <option>Bhopal</option>
              <option>Mumbai</option>
              <option>Banglore</option>
              <option>Chennai</option>
              </select>
              </td>
             </tr>
           
           <tr>
              <td style="font-size:150%;">Address</td> <td><textarea name="address"/></textarea></td>
          </tr>
           
            <tr>
              <td style="font-size:150%;">Languages </td> 
              <td style="font-size:110%;">
               Hindi<input type="checkbox" name="language[]" value="hindi" />
               German<input type="checkbox" name="language[]" value="german" />
               English<input type="checkbox" name="language[]" value="english" />   
              </td>
            </tr>
             
             <tr>
             <td style="font-size:150%;">Image</td>
             <td>
             <input type="file" name="filetoUpload">
             </td>
             </tr>
             
             <tr>
             <td style="font-size:150%;">Mobile</td>
             <td>
             <input type="text" name="phone">
             </td>
             </tr>
              
             <tr>
             <td style="font-size:150%;">
             <input type="submit" value="submit" name="insert">
             </td> 
             </tr>
            
</table>
</form>
</body>
</html>