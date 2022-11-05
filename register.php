<?php


$con = mysqli_connect('localhost','root','','project');

if(isset($_POST['submit']))
{
$Name = $_POST['fullname'];
$Email = $_POST['Email'];
$username = $_POST['username'];

$Password = $_POST['password'];

$Dup_Email = mysqli_query($con, "SELECT * FROM `tableuser1` WHERE Email = '$Email' ");
$Dup_username = mysqli_query($con, "SELECT * FROM `tableuser1` WHERE username = '$username' ");

if(mysqli_num_rows($Dup_Email)){
echo"
<script>
alert('this email is already taken');
window.location.href= 'login.php';
</script>
";
}
if(mysqli_num_rows($Dup_username)){
echo"
<script>
alert('this username is already taken');
window.location.href= 'login.php';
</script>
";
}
else{
    mysqli_query($con, "INSERT INTO `tableuser1`(`fullname`,`Email`,`username`,`password`)
    VALUES('$Name','$Email','$username','$Password')");

echo"
<script>
alert('register successfully');
window.location.href= 'login.php';
</script>
";
}


}
?>