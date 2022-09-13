<?php
session_start();

if($_SERVER['REQUEST_METHOD']=='POST'){

//submit to detabase

//ways to connect mysql database

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
          //  echo "connection establish successfully<br>";
    }




$email=$_POST['email'];
$pass=$_POST['pass'];

$conn=mysqli_connect($servername,$username,$password,$database);
$sql="SELECT * FROM `e_cart` WHERE `EMAIL` LIKE '$email' AND BINARY `PASSWORD` LIKE '$pass'";
$result=mysqli_query($conn,$sql);
$numb=mysqli_num_rows($result);
if ($numb==1) {
    $_SESSION['username']=$email;
     header('location:index1.php');
}
else{
      echo 
  '<strong>Error!</strong> Invalid Login credentials. 

  </button>
<button ><a style="cursor=pointer; text-decoration = none; color = pink;" href="RegistrationForm.php">Try  Again</a></button>

</div>';

            //header('location:RegistrationForm.php');
           
    }


}
?>
