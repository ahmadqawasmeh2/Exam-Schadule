<?php
session_start(); 
$message = "Invalid username Or password";
if (isset($_POST['login'])) {
if (empty($_POST['log_user_name']) || empty($_POST['log_password'])) {
$error = "Username or Password is invalid";
}
else
{
$username=$_POST['log_user_name'];
$password=$_POST['log_password'];
$type =$_POST['type'];
$connection = mysql_connect("localhost", "root", "123456789","exam");
$username = stripslashes($username);
$password = stripslashes($password);
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);
$db = mysql_select_db("exam", $connection);

if ($type=='admin'){
$query = mysql_query("select * from `login` where name='$username' AND pass='$password'", $connection);
$rows = mysql_num_rows($query);
if ($rows > 0) {
$_SESSION['login']=$username;
$_SESSION['type']=$type;
header("location: main page.php"); 
}
echo "<script type='text/javascript'>alert('$message');window.location.href ='index.php';</script>";

}


else if ($type=='lecture'){
$query = mysql_query("select * from `lecture` where number='$username' AND number='$password'", $connection);
$rows = mysql_num_rows($query);
if ($rows > 0) {
$_SESSION['login']=$username;
$_SESSION['type']=$type;
header("location:mainpage lecture.php");
}
echo "<script type='text/javascript'>alert('$message');window.location.href ='index.php';</script>";

}

else if ($type=='student'){
$query = mysql_query("select * from `student` where stud_Num='$username' AND stud_Num='$password'", $connection);
$rows = mysql_num_rows($query);
if ($rows > 0) {
$_SESSION['login']=$username;
$_SESSION['type']=$type;
header("location: mainpage student.php");
}
echo "<script type='text/javascript'>alert('$message');window.location.href ='index.php';</script>"; 

}
mysql_close($connection); 
}
}
?>

