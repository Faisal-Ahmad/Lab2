<?php
echo "<h1>Registration Successful</h1><br>";
$user = $_POST['un'];
$full = $_POST['fn'];
$email = $_POST['ue'];
$phone = $_POST['up'];
$pass = $_POST['pw'];
$gen = $_POST['gen'];
$edu = $_POST['edu'];
echo "Username : ".$user;
echo "<br>Full Name : ".$full;
echo "<br>Email : ".$email;
echo "<br>Phone : ".$phone;
echo "<br>Password : ".$pass;
echo "<br>Gender : ".$gen;
echo "<br>Education : ";
echo "<ul>";
foreach($edu as $ed)
{
	echo "<li>".$ed."</li>";
}
echo "</ul>";
?>