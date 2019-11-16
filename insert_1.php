<?php
include("connection.php");
$query= "INSERT INTO STUDENTS VALUES ('17345','fhhgg','cse','m','3415445' )";
$data = mysqli_query($conn, $query);
if($data)
{
	echo "Data submitted";
}
else{ echo "error" ;}
?>