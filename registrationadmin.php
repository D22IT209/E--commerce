<?php

$Email = $_POST['Email'];
$password = $_POST['password'];

$con = mysqli_connect('Localhost','root','','login');

$s = mysqli_query($con, "SELECT * FROM `tableuser1` where(Email = '$Email')and password='$password'");

session_start();
if(mysqli_num_rows($s)){
$_session['tableuser1']=$Email;
   echo"
   <script>
   alert('successfull');
   window.location.href= 'admin.php';
   </script>
   ";
}
   else
{
   echo"
   <script>
   alert('wrong username or password');
   window.location.href= 'loginadmin.php';
   </script>
   ";
}
?>



