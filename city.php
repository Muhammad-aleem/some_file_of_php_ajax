<?php

include('classes/cityclass.php');
$obj=new CityData;


if (isset($_POST['submit'])) {
	$cityname=$_POST['cityname'];
	$countryname=$_POST['countryname'];

	$obj->SavecityData($cityname,$countryname);


}
$option=$obj->getAllcityData();
$countryname=$obj->getAllcountryData();
if (isset($_GET['delid'])) 
{
	$obj->deletecityData($_GET['delid']);
	header( "location:city.php");
}




?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<center>
		<form action="city.php" method="POST" >
			<h1>Add City</h1>
			
			<label>City</label>
			<input type="text" name="cityname" placeholder="Your city Name--">
			<br><br>

								<div>
									<label>Country</label>
									<select  name="countryname">
										<option>Choose country</option>
										<?php foreach($countryname as $countryname):?>
											<option value="<?php echo $countryname['country_id'];?>"><?php echo $countryname['countryname'];?></option>
											<?php endforeach;?>
										
										
									</select>
								</div><br>




			<input type="submit" name="submit" value="submit">
		</form>
		<table border="3" style="margin-top: 30px; ">
			<tr>
			<th>City</th>
			<th>Country</th>
			<th>Action</th>

			</tr>
<?php foreach ($option as $option):?>
			<tr>
				<td><?php echo $option['cityname'];?></td>
				<td><?php echo $option['country'];?></td>
				<th><a href="city.php?delid=<?php echo $option['city_id'] ;?>">delete</a></th>
			</tr>
			<?php endforeach;?>
		</table>


	</center>

</body>
</html>