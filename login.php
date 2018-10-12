<?php
echo "<h1>Registration Successful</h1><br>";
$user = $_POST['un'];//username
$full = $_POST['fn'];//Fullname
$email = $_POST['ue'];//Email Address
$phone = $_POST['up'];//Phonr Number
$pass = $_POST['pw'];//Password
$gen = $_POST['gen'];//gender
$edu = $_POST['edu'];//education 
echo "Username : ".$user;
echo "<br>Full Name : ".$full;
echo "<br>Email : ".$email;
echo "<br>Phone : ".$phone;
echo "<br>Password : ".$pass;
echo "<br>Gender : ".$gen;
echo "<br>Education : ";
echo "<ul>";
foreach($edu as $ed)//print education array to a list
{
	echo "<li>".$ed."</li>";
}
echo "</ul>";
?>