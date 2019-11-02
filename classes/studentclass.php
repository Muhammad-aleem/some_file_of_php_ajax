<?php
include('connect.php');

class NameData extends Database

{
	public function SavesnameData($studentname){
	 $obj="INSERT INTO student(`studentname`) VALUES('$studentname')";


	$query=$this->db->prepare($obj);
	$query->execute();
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