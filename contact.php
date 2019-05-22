<?php  
     
    $user = 'root';  
    $pass = '';  
    $db = 'testdb';  
    $conn = mysqli_connect('localhost', $user, $pass,$db);  
    if(!$conn){  
      die('Could not connect: '.mysqli_connect_error());  
    }  
    
    $a = $_POST['firstname'];
    $b = $_POST['lastname'];
 $c = $_POST['subject'];
 
$sql="INSERT INTO contact(fname,lname,subject) VALUES('$a','$b','$c')";
 if(mysqli_query($conn, $sql)){  
 echo "Record inserted successfully";  
}
else
{  
echo "Could not insert record: ". mysqli_error($conn);  
}  

mysqli_close($conn);  
      
?>