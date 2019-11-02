<?php
include('classes/sectionclass.php');
$obj = new Data;

if (isset($_POST['submit'])) {
	$sectionname = $_POST['sectionname'];
	$degreename = $_POST['degreename'];
	$student = $_POST['studentname'];
	$obj->SavesectionData($sectionname, $degreename, $student);
}
$option = $obj->getAllsectionData();
$degreename = $obj->getAllData();
$student = $obj->getAllstudentnameData();




?>


<!DOCTYPE html>
<html>

<head>
	<title></title>
</head>

<body>
	<form method="POST" action="section.php">
		<center>
			<label>section</label>
			<input type="text" name="sectionname"><br>

			<div class="col-sm-5">
				<label class="col-sm-3 control-label">degree</label>
				<select class="form-control" name="degreename">
					<option>Choose degree</option>
					<?php foreach ($degreename as $degreename) : ?>
						<option value="<?php echo $degreename['degree_id']; ?>"><?php echo $degreename['degreename']; ?></option>
					<?php endforeach; ?>


				</select>
			</div><br>
			<div>
				<label>Student</label>


				<select name="studentname">
					<option>Choose student</option>
					<?php foreach ($student as $student) : ?>
						<option value="<?php echo $student['student_id']; ?>"><?php echo $student['studentname']; ?> </option>
					<?php endforeach; ?>


				</select>

			</div><br>
			<input type="submit" name="submit" value="submit">


		</center>
	</form>

</body>

</html>