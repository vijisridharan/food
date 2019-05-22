<html>
<body>
<?php
$username='root';
$pass='';
$db='testdb';
$db=new mysqli('localhost',$username,$pass,$db) or die("unable to connect");

$b=$_POST["q1"];
$c=$_POST["c1"];
if(isset($_POST["ch1"]))
{
$d=$b * $c;
$query="insert into food(item,quantity,cost,total )values('$b','$c',$d)";
$sql=mysqli_query($db,$query);

if(!empty($_POST['ch1'])){

}
}

$b1=$_POST["q2"];
$c1=$_POST["c2"];
if(isset($_POST["ch2"]))
{
$d1=$b1 * $c1;
$query1="insert into food(item,quantity,cost,total )values('$b1','$c1',$d1)";
$sql=mysqli_query($db,$query1);
if(!empty($_POST['ch2'])){
}
}

$b2=$_POST["q3"];
$c2=$_POST["c3"];
if(isset($_POST["ch3"])){
$d2=$b2 * $c2;
$query2="insert into food(item,quantity,cost,total )values('$b2','$c2',$d2)";
$sql=mysqli_query($db,$query2);
if(!empty($_POST['ch3'])){

}
}

$b3=$_POST["q4"];
$c3=$_POST["c4"];
if(isset($_POST["ch4"])){
$d3=$b3 * $c3;
$query3="insert into food(item,quantity,cost,total )values('$b3','$c3',$d3)";
$sql=mysqli_query($db,$query3);
if(!empty($_POST['ch4'])){

}
}

$b4=$_POST["q5"];
$c4=$_POST["c5"];
if(isset($_POST["ch5"])){
$d4=$b4 * $c4;
$query4="insert into food(item,quantity,cost,total )values('$b4','$c4',$d4)";
$sql=mysqli_query($db,$query4);
if(!empty($_POST['ch5'])){

}
}

$b5=$_POST["q6"];
$c5=$_POST["c6"];
if(isset($_POST["ch6"])){
$d5=$b5 * $c5;
$query5="insert into food(item,quantity,cost,total )values('$b5','$c5',$d5)";
$sql=mysqli_query($db,$query5);
if(!empty($_POST['ch6'])){

}
}

$b6=$_POST["q7"];
$c6=$_POST["c7"];
if(isset($_POST["ch7"])){
$d6=$b6 * $c6;
$query6="insert into food(item,quantity,cost,total )values('$b6','$c6',$d6)";
$sql=mysqli_query($db,$query6);
if(!empty($_POST['ch7'])){

}
}

$b7=$_POST["q8"];
$c7=$_POST["c8"];
if(isset($_POST["ch8"])){
$d7=$b7 * $c7;
$query7="insert into food(item,quantity,cost,total )values('$b7','$c7',$d7)";
$sql=mysqli_query($db,$query7);
if(!empty($_POST['ch8'])){

}
}
$b8=$_POST["q9"];
$c8=$_POST["c9"];
if(isset($_POST["ch9"])){
$d8=$b8 * $c8;
$query8="insert into food(item,quantity,cost,total )values('$b8','$c8',$d8)";
$sql=mysqli_query($db,$query8);
if(!empty($_POST['ch9'])){

}
}
?>
</body>
</html>
