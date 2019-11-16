<?php
include("connection.php");
error_reporting(0);
$query= "SELECT * FROM  COMPANY WHERE STATUS='0' ";
$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);

if($total !=0)
{
	?>
	
	<table>
	     <tr>
		    <th>Registration Number</th>
			<th>Company Name</th>
			<th>Company Address</th>
			<th>Company Webite</th>
			<th>Job Profile</th>
			<th>HR Name</th>
			<th>HR email</th>
			<th>HR Contact</th>
			<th>Job Package</th>
			<th>Branch eligible</th>
			<th>Interview date</th>
			<th>Status</th>
			<th>Submit</th>
		</tr>	
	</table>
	<?php
	while($result = mysqli_fetch_assoc($data))
	{
		echo " <br/><tr>
		    <td>".$result['regno']."</td>
			<td>".$result['c_name']."</td>
			<td>".$result['c_address']."</td>
			<td>".$result['c_website']."</td>
			<td>".$result['j_profile']."</td>
			<td>".$result['hr_name']."</td>
			<td>".$result['hr_email']."</td>
			<td>".$result['hr_contact']."</td>
			<td>".$result['j_package']."</td>
			<td>".$result['j_branch_eligible']."</td>
			<td>".$result['interview_date']."</td>
		</tr>";
	   	
	}
	
}
else
{
	echo "No Record Found";
}



?>
</table>
<html>
<head>
</head>
<body>

<form action="" method="GET">
 while($total !=0)
{
Status <input type="text" name="status" value=""/><br><br>;
$total--;
}

<input type="submit" name="submit" value="Submit"/>

</form>

<?php
$s = $_GET['status'];

$query= "INSERT INTO COMPANY VALUES ('$rn','$name','$branch','$gender','$pan' )";
$data = mysqli_query($conn, $query);
if($data)
{
	echo "Data submitted";
}


?>

</body>
</html>
