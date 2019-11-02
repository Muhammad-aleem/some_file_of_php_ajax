<?php 
require'classes/adddataclass.php';

$obj=new Data;
if (isset($_POST['submit'])) {
	$city=$_POST['cityname'];
	$country=$_POST['countryname'];
	$obj->SavedataData($city,$country);


	// $save=$obj->SavedataData($_POST['city'],$_POST['country']);
	// if ($save==true) {
	// 	echo "data is save";
	// 	exit;
	// }
}

if(isset($_POST['getData'])){
	$data=$obj->getCityData($_POST['country']);

	$html='';
	foreach($data as $city)
	{
		$html.='<option>'.$city['cityname'].'</option>';
	}
	echo $html;
	exit;
	

}

$countryname=$obj->getAllcountryData();
$cityname=$obj->getAllcityData();

?>


<!DOCTYPE html>
<html>
<head>
	<title></title>

		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<form method="POST" action="adddata.php">
		<center>
		<div>
									<label>Country</label>
									<select  name="countryname" onchange="myFunction()" id="country">
										<option>Choose country</option>
										<?php foreach($countryname as $countryname):?>
											<option value="<?php echo $countryname['country_id'];?>"><?php echo $countryname['countryname'];?></option>
											<?php endforeach;?>
										
										
									</select>
								</div><br>
								<label>City</label>
									<select  name="cityname" id="city">
										<option>Choose city</option>
										<?php foreach($cityname as $cityname):?>
											<option value="<?php echo $cityname['city_id'];?>"><?php echo $cityname['cityname'];?></option>
											<?php endforeach;?>
										
										
									</select>
								</div><br><br>
								<input type="submit" name="submit" value="submit" id="btn">
	</form>

	<div id="dynamic-data">
	
	</center>
	<script src="jquery.js"></script>
<script type="text/javascript">
	
	function myFunction()
	{
		var country = $('#country :selected').val();  
		// onchange ajax function call
		$.ajax({
				url:'adddata.php',
				type:'POST',
				data:'country='+country+'&getData='+1,
				success:function(result)
				{
					$('#city').html(result);
        

				}
				});

	}

</script>
</body>
</html>
