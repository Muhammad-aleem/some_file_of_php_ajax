<?php
include('connect.php');



class Data extends Database
{
	public function savemessage($name,$message){

		$obj="INSERT INTO message(`name`,`message`) VALUES('$name','$message') ";
		$query=$this->db->prepare($obj);
		$query->execute();
		return true;


	}
	public function getALLmessageData(){

		$obj=" SELECT*FROM message ";
		$query=$this->db->prepare($obj);
		$query->execute();
		$result=$query->fetchALL(PDO::FETCH_ASSOC);
		return $result;

	}

	
	}



?>