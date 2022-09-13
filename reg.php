<?php
session_start();
header('location:RegistrationForm.php');
if($_SERVER['REQUEST_METHOD']=='POST'){
$name1=$_POST['name1'];
$name2=$_POST['name2'];
$email=$_POST['email'];
$pass=$_POST['pass'];
$pass1=$_POST['pass1'];
$num1=$_POST['num'];
$gen=$_POST['gender'];
//submit to detabase

//ways to connect mysql database
if($pass==$pass1){
$servername='localhost';
$username='root';
$password='';
$database="e_kart";

//create connection object

$conn=mysqli_connect($servername,$username,$password);

//checking the connection


if (!$conn) {
  die("Connection failed: ".mysqli_connect_error());
}
else{
            echo "connection establish successfully<br>";
    }


$conn=mysqli_connect($servername,$username,$password,$database);
$sql="INSERT INTO `e_cart` (`FIRSTNAME`, `LASTNAME`, `EMAIL`, `NUMBER`, `PASSWORD`, `GENDER`, `ADDRESS`) VALUES ('$name1', '$name2', '$email', '$num1', '$pass', '$gen', '');";
$result=mysqli_query($conn,$sql);
if ($result) {
     echo 'Data inserted successfully<br>';
}
else{
           echo "Insert faild.<br>";
    }
}


}
?>