<?php
require'classes/viewclass.php';
$obj=new Data;

if (isset($_POST['submit'])) {
	$degreename=$_POST['degreename'];
	$sectionname=$_POST['sectionname'];
		$student=$_POST['studentname'];
	$obj->SaveviewData($degreename,$sectionname,$student);
}

if(isset($_POST['getData'])){
	$data=$obj->getAllviewData1($_POST['degree']);

	$html='';
	foreach($data as $section)
	{
		$html.='<option>'.$section['sectionname'].'</option>';
	}
	echo $html;
	exit;
	
}
if(isset($_POST['getData2'])){
	$student=$obj->getinvoicesData2($_POST['degreeid'],$_POST['sectionid']);
	


	$html='';
	foreach($student as $section)
	{
		$html.='<option value="'.$student['student_id'].'">'.$student['studentname'].'</option>';
	}
	echo $html;
	exit;

}




$degreename=$obj->getAllData();
$section=$obj->getAllsectionData();
$student=$obj->getAllstudentnameData();



?>



<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">

</head>
<body>
	<form method="POST" action="view.php">
		<center>
		<div>
				<label >degree</label>
									<select  name="degreename"onchange="myFunction()" id="degreename" >
										<option>Choose degree</option>
										<?php foreach($degreename as $degreename):?>
											<option value="<?php echo $degreename['degree_id'];?>"><?php echo $degreename['degreename'];?></option>
											<?php endforeach;?>
										
										
									</select>
								</div><br>
								<div >
								<label >Section</label>
								
								
									<select  name="sectionname" id="sectionname" onchange="myFunction1()">
										<option>Choose Section</option>
										<?php foreach($section as$section):?>
											<option value="<?php echo $section['section_id'];?>"><?php echo $section['sectionname'];?> </option>
										<?php endforeach;?>
										
										
									</select>
								
							</div>
							<br>
								<div >
								<label >Student</label>
								
							
									<select name="studentname" id="student" >
										<option>Choose student</option>
										<?php foreach($student as$student):?>
											<option value="<?php echo $student['student_id'];?>"><?php echo $student['studentname'];?> </option>
										<?php endforeach;?>
										
										
									</select>
								
							</div><br>
							<input type="submit" name="submit" value="submit">

	</form>
	</center>
	<script src="jquery.js"></script>
	<script type="text/javascript">
		function myFunction()
	{
		var degree = $('#degreename :selected').val();  
		alert(degree);
		// onchange ajax function call
		$.ajax({
				url:'view.php',
				type:'POST',
				data:'degree='+degree+'&getData='+1,
				success:function(result)
				{
					alert(result);
					$('#sectionname').html(result);
        

				}
				});

	}
		function myFunction1()
	{
		var degreeid = $('#degreename :selected').val();  
		var sectionid = $('#sectionname :selected').val();  
		alert(degreeid);
		alert(sectionid);
		

			
	
		$.ajax({
				url:'view.php',
				type:'POST',
				data:'degreeid='+degreeid+'&sectionid='+sectionid+'&getData2='+1,
				success:function(result)

				{
					alert(result);
					$('#student').html(result);

        

				}
				});

	}
		



	</script>

</body>
</html>