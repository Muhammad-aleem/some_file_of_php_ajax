<?php
include('connect.php');

class Data extends Database
{
	 public function SavedegreeData($degreename){
		 $obj="INSERT INTO degree (`degreename`) VALUES('$degreename')";
		
		
		 $query=$this->db->prepare($obj);
   $query->execute();
		

	}

	public function getAllData(){

 	
 	$obj="SELECT *FROM degree";
 			$query=$this->db->prepare($obj);
 			$query->execute();
 			$result=$query->fetchALL(PDO::FETCH_ASSOC);
 			return $result;
 
	}
}



?>