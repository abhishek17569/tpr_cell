<?php
include("connection.php");
error_reporting(0);
?>

<html>
<head>
</head>
<body>

<form action="" method="GET">
Registration Number <input type="text" name="regno" value=""/><br><br>
Company Name <input type="text" name="name" value=""/><br><br>
Company Address <input type="text" name="add" value=""/><br><br>
Company Webite <input type="text" name="web" value=""/><br><br>
Job Profile <input type="text" name="jp" value=""/><br><br>
HR Name <input type="text" name="hn" value=""/><br><br>
HR email <input type="text" name="he" value=""/><br><br>
HR Contact <input type="text" name="hc" value=""/><br><br>
Job Package <input type="text" name="jpa" value=""/><br><br>
Branch eligible <input type="text" name="be" value=""/><br><br>
Interview date <input type="text" name="id" value=""/><br><br>

<input type="submit" name="submit" value="Submit"/>

</form>

<?php
$rn = $_GET['regno'];
$name = $_GET['name'];
$add = $_GET['add'];
$web = $_GET['web'];
$jp = $_GET['jp'];
$hn = $_GET['hn'];
$he = $_GET['he'];
$hc = $_GET['hc'];
$jp = $_GET['jpa'];
$be = $_GET['be'];
$id = $_GET['id'];


$query= "INSERT INTO COMPANY VALUES ('$rn','$name','$add','$web','$hn','$he','$hc','$jp','$jpa','$be','$id')";
$data = mysqli_query($conn, $query);
if($data)
{
	echo "Data submitted";
}


?>

</body>
</html>
