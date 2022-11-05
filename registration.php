<?php

$Email = $_POST['Email'];
$password = $_POST['password'];

$con = mysqli_connect('Localhost','root','','project');

$s = mysqli_query($con, "SELECT * FROM `tableuser1` where(Email = '$Email')and password='$password'");

session_start();
if(mysqli_num_rows($s)){
$_session['tableuser1']=$Email;
   echo"
   <script>
   alert('successfull');
   window.location.href= 'products.php';
   </script>
   ";
}
   else
{
   echo"
   <script>
   alert('wrong username or password');
   window.location.href= 'login.php';
   </script>
   ";
}
?>



