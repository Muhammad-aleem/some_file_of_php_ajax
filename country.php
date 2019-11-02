<?php
include('classes/countryclass.php');

$obj=new CountryData;

if (isset($_POST['submit'])) {
	$countryname=$_POST['countryname'];

	$obj->SavecountryData($countryname);
}
$option=$obj->getAllcountryData();
if (isset($_GET['delid'])) 
{
	$obj->deletecountryData($_GET['delid']);
	header( "location:country.php");
}

?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
		<script src="jquery.js"></script>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<form method="POST" action="country.php">
	<center>
	
		<h1 style="color: #000;">COUNTRY</h1>
	

							<label> Country_Name</label>
							<input type="text" name="countryname" placeholder="Enter the COUNTRY"><br>
							<input type="submit" name="submit" value="submit">

		</form>
	<table border="3" style="margin-top: 50px;">
		<tr>
			<th>Country</th>
			<th>Action</th>
		</tr>


		<tr>
			<?php foreach ($option as $option):?>
			<td><?php echo $option['countryname'];?></td>
			<th><a href="country.php?delid=<?php echo $option['country_id']?>">delete</a></th>
		</tr>
		<?php endforeach;?>


	</table>

</center>




</script>
</body>
</html>