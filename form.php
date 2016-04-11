<html>
<head>

<title>
FORM FOR STUDENT MANAGEMENT SYSTEM
</title>
</head>

<style>

#email
{
position: absolute;
top: 70px;
left: 100px;
}

#email_box
{
position: absolute;
top: 70px;
left: 200px;
}

#password
{
position: absolute;
top: 100px;
left: 100px;
}

#password_box
{
position: absolute;
top: 100px;
left: 200px;
}

#telephone
{
position: absolute;
top: 130px;
left: 100px;
}

#telephone_box
{
position: absolute;
top: 130px;
left: 200px;
}

#message
{
position: absolute;
top: 160px;
left: 100px;
}

#message_box
{
position: absolute;
top: 160px;
left: 200px;
}

#remember
{
position: absolute;
top: 250px;
left: 200px;
}

#submit
{
position: absolute;
top: 280px;
left: 200px;
}


</style>

<body>

<h2>
Contact form
</h2>

<form action="database1.php" method="GET">

<div id="email">
<b>
Email:
</b>
</div>

<div id="email_box">
<input type="email" size="99%" name="email" placeholder="Enter email">
</div>

<br>

<div id="password">
<b>
Password:
</b>
</div>

<div id="password_box">
<input type="text" size="99%" name="password" placeholder="Enter password">
</div>

<br>

<div id="telephone">
<b>
Telephone:
</b>
</div>

<div id="telephone_box">
<input type="text" size="99%" name="telephone" placeholder="Enter number">
</div>

<br>

<div id="message">
<b>
Message:
</b>
</div>

<div id="message_box">
<textarea rows="5" cols="101%" name="message" placeholder="Enter message">
</textarea>
</div>

<br>

<div id="remember">
<input type="checkbox" name="remember" checked="checked">
<b>
Remember me
</b>
</div>

<br>

<div id="submit">
<input type="submit" name="submit" value="submit">
</div>

</form>
</body>
</html>