<html>
<body>
<?php
$username='root';
$pass='';
$db='testdb';
$conn= mysqli_connect('localhost',$username,$pass,$db) or die("unable to connect");

if (!$conn) {
    die('Could not connect: '.mysqli_connect_error()); 
} 
$a=$_POST['firstname '];
$b=$_POST['email '];
$c=$_POST['address'];
$d=$_POST['city'];
$e=$_POST['state'];
$f=$_POST['zip'];
$sql = "insert into  pay (firstname, email, address,city,state,zip)
values ('$a', '$b', '$c','$d','$e','$f')";
if(mysqli_query($conn, $sql)){  
 echo "Record inserted successfully";  
}
else
{  
echo "Could not insert record: ". mysqli_error($conn);  
}  

mysqli_close($conn);  
      


?>
