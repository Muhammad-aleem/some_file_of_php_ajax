<?php 
include('connect.php');

class Data extends Database
{
	 public function SavesectionData($sectionname,$degree,$student){
		 $obj="INSERT INTO section (`sectionname`,`degree`,`student`) VALUES('$sectionname','$degree','$student')";
		
		
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

	public function getAllsectionData(){

 	
 	$obj="SELECT *FROM section";
 			$query=$this->db->prepare($obj);
 			$query->execute();
 			$result=$query->fetchALL(PDO::FETCH_ASSOC);
 			return $result;
 
	}

		 public function getAllstudentnameData(){
 	
 			$obj="SELECT *FROM student";
 
 			$query=$this->db->prepare($obj);
 			$query->execute();
 			$result=$query->fetchALL(PDO::FETCH_ASSOC);
 			return $result;
 		}
}






?>