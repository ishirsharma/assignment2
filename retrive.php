<html>

<head>

<title>
RETRIVE DATABASE
</title>

</head>

<body>

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
echo "<br>";
$query = "SELECT * FROM user";

$data = mysqli_query($conn, $query);
if($data)
{
	echo "Database queried successfully";
}
else
{
echo "Error quering database".mysql_error();
}
?>
<br>
<table>
<tr>

<th>
ID
</th>
<th>
EMAIL
</th>
<th>
PASSWORD
</th>
<th>
TELEPHONE
</th>
<th>
MESSAGE
</th>

</tr>
<?php
while($info = mysqli_fetch_array($data))
{
print "<tr>";
print "<td>".$info[0]."</td>";
print "<td>".$info[1]."</td>";
print "<td>".$info[2]."</td>";
print "<td>".$info[3]."</td>";
print "<td>".$info[4]."</td>";
print "</tr>";
}

?>

</table>

<?php
mysqli_close($conn);
?>


</body>

</html>