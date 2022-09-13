<?php
session_start();
$d=$_SESSION['username'];
header('location:MyAccount.php');
if($_SERVER['REQUEST_METHOD']=='POST'){
$name1=$_POST['name1'];
$name2=$_POST['name2'];

$num1=$_POST['num'];
$add=$_POST['address'];
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
$sql="UPDATE `e_cart` SET `FIRSTNAME` = '$name1', `LASTNAME` = '$name2', `NUMBER` = '$num1', `ADDRESS` = '$add' WHERE `e_cart`.`EMAIL` = '$d';
";
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