<?php 
  include('connect.php');


class CountryData extends Database
{
	 public function SavecountryData($countryname){
		 $obj="INSERT INTO country (`countryname`) VALUES('$countryname')";
		
		 $query=$this->db->prepare($obj);
   $query->execute();
		

	}
	public function getAllcountryData(){

 	
 	$obj="SELECT *FROM country";
 			$query=$this->db->prepare($obj);
 			$query->execute();
 			$result=$query->fetchALL(PDO::FETCH_ASSOC);
 			return $result;
 
	}
	public function getSinglecountryData($id){
	 	$obj="SELECT * FROM country WHERE country_id=$id";
	 $query=$this->db->prepare($obj);
	 $query->execute();
	 $result=$query->fetch(PDO::FETCH_ASSOC);
	 return $result;
	}
	 public function deletecountryData($id)
 	{
	 	$obj="DELETE FROM country WHERE country_id=$id";
	 	$query=$this->db->prepare($obj);
		$query->execute();

	 }

  public function updatecountryData($feestype,$id)
	 {
	 	$obj="UPDATE country SET feestype='$feestype' WHERE country_id=$id";

	 	$query=$this->db->prepare($obj);
		$query->execute();

	 }
	
}


?>