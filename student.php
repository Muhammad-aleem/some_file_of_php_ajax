<?php
include('classes/studentclass.php');
$obj=new NameData;


if (isset($_POST['submit'])) {
	$studentname=$_POST['studentname'];
	$obj->SavesnameData($studentname);

}
$student=$obj->getAllstudentnameData();

?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="POST" action="student.php">
		<center>
			
<label>Student_name</label>
<input type="text" name="studentname" placeholder="enter the name...."><br>
<input type="submit" name="submit" value="submit">


		</center>


	</form>

</body>
</html>