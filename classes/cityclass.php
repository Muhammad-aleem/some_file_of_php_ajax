<?php 
  include('connect.php');


class CityData extends Database
{
	 public function SavecityData($cityname,$country){
		 $obj="INSERT INTO city (`cityname`,`country`) VALUES('$cityname','$country')";
		
		 $query=$this->db->prepare($obj);
   $query->execute();
		

	}

	public function getAllcityData(){

 	
 	$obj="SELECT *FROM city";
 			$query=$this->db->prepare($obj);
 			$query->execute();
 			$result=$query->fetchALL(PDO::FETCH_ASSOC);
 			return $result;
 
	}

	public function getAllcountryData(){

 	
 	$obj="SELECT *FROM country";
 			$query=$this->db->prepare($obj);
 			$query->execute();
 			$result=$query->fetchALL(PDO::FETCH_ASSOC);
 			return $result;
 
	}
	public function getSinglecityData($id){
	 	$obj="SELECT * FROM city WHERE city_id=$id";
	 $query=$this->db->prepare($obj);
	 $query->execute();
	 $result=$query->fetch(PDO::FETCH_ASSOC);
	 return $result;
	}
	 public function deletecityData($id)
 	{
	 	$obj="DELETE FROM city WHERE city_id=$id";
	 	$query=$this->db->prepare($obj);
		$query->execute();

	 }

  public function updatecityData($id)
	 {
	 	$obj="UPDATE country SET feestype='$feestype' WHERE country_id=$id";

	 	$query=$this->db->prepare($obj);
		$query->execute();

	 }
	
}


?>