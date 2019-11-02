<?php 
include('classes/degreeclass.php');

$obj=new Data;

if (isset($_POST['submit'])) {
	$degreename=$_POST['degreename'];

	$obj->SavedegreeData($degreename);

}
$option=$obj->getAllData();



?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="POST" action="degree.php">
		<center>
			<label>degree</label>
			<input type="text" name="degreename"><br>
			<button type="submit" name="submit">submit</button>




		</center>


	</form>

</body>
</html>