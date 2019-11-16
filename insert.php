<?php
include("connection.php");
error_reporting(0);
?>

<html>
<head>
</head>
<body>

<form action="" method="GET">
Roll No <input type="text" name="rollno" value=""/><br><br>
Students Name <input type="text" name="name" value=""/><br><br>
Branch <input type="text" name="branch" value=""/><br><br>
Gender <input type="text" name="gender" value=""/><br><br>
Pancard Number <input type="text" name="pancard" value=""/><br><br>
<input type="submit" name="submit" value="Submit"/>

</form>

<?php
$rn = $_GET['rollno'];
$name = $_GET['name'];
$branch = $_GET['branch'];
$gender = $_GET['gender'];
$pan = $_GET['pancard'];

$query= "INSERT INTO STUDENTS VALUES ('$rn','$name','$branch','$gender','$pan' )";
$data = mysqli_query($conn, $query);
if($data)
{
	echo "Data submitted";
}


?>

</body>
</html>
