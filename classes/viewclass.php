<?php
include('connect.php');

class Data extends Database
{
	 public function SaveviewData($section,$degree,$student){
		   $obj="INSERT INTO section (`section`,`degree`,`student`) VALUES('$section','$degree','$student')";
		 
		
		
		 $query=$this->db->prepare($obj);
   $query->execute();
		

	}
	public function getAllviewData(){

 	
 	$obj="SELECT *FROM view ";
 			$query=$this->db->prepare($obj);
 			$query->execute();
 			$result=$query->fetchALL(PDO::FETCH_ASSOC);
 			return $result;
 
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


	public function getAllviewData1($degree){

 	
 	$obj="SELECT *FROM section WHERE degree=$degree";
 			$query=$this->db->prepare($obj);
 			$query->execute();
 			$result=$query->fetchALL(PDO::FETCH_ASSOC);
 			return $result;
 
	}
		public function getinvoicesData2($degree,$section){

 	
  $obj="SELECT * FROM student WHERE degree=$degree AND section=$section";
 	 	

 	
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