<?php 
  include('connect.php');


class Data extends Database
{
	 public function SavedataData($city,$country){
		 $obj="INSERT INTO data (`city`,`country`) VALUES('$city','$country')";

		
		 $query=$this->db->prepare($obj);
   $query->execute();
		

	}


	 public function getattendanceData($degree){

 	
 	 $obj="SELECT * FROM section WHERE degree=$degree";

 	
 			$query=$this->db->prepare($obj);
 			$query->execute();
 			$result=$query->fetchALL(PDO::FETCH_ASSOC);
 			return $result;
 
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
	public function getSingleData($id){
	 	$obj="SELECT * FROM data WHERE data_id=$id";
	 $query=$this->db->prepare($obj);
	 $query->execute();
	 $result=$query->fetch(PDO::FETCH_ASSOC);
	 return $result;
	}
	 public function deletecityData($id)
 	{
	 	$obj="DELETE FROM data WHERE data_id=$id";
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