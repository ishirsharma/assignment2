<html>

<head>

<title>
FORM DATABASE
</title>

</head>

<body>

<?php

$email = $_GET['email'];
$password = $_GET['password'];
$telephone = $_GET['telephone'];
$message = $_GET['message'];
$remember = $_GET['remember'];

?>

<?php
$msg = "Congratulation! your form is validated";
$flag = "OK";

if(!$email)
{
$msg = "Please enter the email address";
$flag = "NOTOK";
}

if(!$password)
{
$msg = "Please enter the password";
$flag = "NOTOK";
}

if(!$telephone)
{
$msg = "Please enter your telephone number";
$flag = "NOTOK";
}

if(!$email)
{
$msg = "Please enter your message";
$flag = "NOTOK";
}

if($flag=="NOTOK")
{

print $msg;
?>

<input type="button" name="goback" value="goback" onclick='history.go(-1)'>
<br>

<?php
}
else
{
print $msg;
?>

<?php
echo $email;
?>
<br>

<?php
echo $password;
?>
<br>

<?php
echo $telephone;
?>
<br>

<?php
echo $message;
?>
<br>

<?php
echo $remember;
?>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$data_base = "sms";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $data_base);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

$query = "insert into user (email, password, telephone, message) values ('".$email."', '".md5($password)."', '".$telephone."', '".$message."')";

if (mysqli_query($conn, $query))
{
	echo "Database created successfully";
}
else
{
echo "Error creating database".mysqli_error($conn);
}
mysqli_close($conn);
}
?>
</body>

</html>