<?php
include('classes/function.php');
$obj= new Data;

if (isset($_POST['send'])) {

	$save= $obj->savemessage($_POST['name'],$_POST['message']);
	if ($save==true) {
		echo "Your Message is save successfullY!";
		exit;
	}

	
}
if (isset($_POST['getALLmessageData'])) {
		$data=$obj->getAllmessageData();
		$html='';


 foreach ($data as  $data){
 	$html.="
 	<h6 style='font-size:25px;color:blue;'><b>".$data['name'].":</b></h6>
 	<p style='font-size:20px;color:#000;'>".$data['message'].".</p>

 	";
 	
 }
 echo $html;
 	exit;




}
else{
	$data=$obj->getALLmessageData();

}

	


  ?>


  <!DOCTYPE html>
  <html>
  <head>
  	<title></title>
  		<script src="jquery.js"></script>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
  </head>
  <body>
  	<center>
  	 
  		<label>Name</label>
  		<input type="text" name="" id="name" placeholder="Enter Your  Name...."><br><br>
  		<label>Message</label>
  		<textarea style="width: 200px" id="message" placeholder=" Type your Message.... "></textarea><br><br>
  		<input type="button" id="btn" value="SEND">
  		<br><br><br><br><br><br>
  		<div style="width: 500px;height: 400px;background-color:#F0FFFF	;overflow-y: scroll;text-align: left;padding-left: 10px;" id="anserbox">
  				<div id="dynamic-data">
  				<?php  foreach ($data as  $data):?>
  					<h6><b><?php echo $data['name'];?> :</b></h6>
  					<p><?php echo $data['message'];?></p>

  				<?php endforeach;?>
</div>
  		</div>
  		
  	


<script type="text/javascript">
	window.setInterval(function(){
 $.ajax({
		url:'message.php',
		type:'POST',
		data:'getALLmessageData='+1,
		success:function(result){
			$('#dynamic-data').html(result);
		}
		});
  $('#anserbox').animate({
        scrollTop: $('#anserbox').get(0).scrollHeight
    }, 2000);
}, 10);
	$('#btn').click(function(){


	var name=$('#name').val();
	var message=$('#message').val();
	if(name=='' || message=='')
	{
		alert('please fill all fields');
	}
	else
	{

	$.ajax({
		url:'message.php',
		type:'POST',
		data:'name='+name+'&message='+message+'&send='+1,
		success:function(result)
		{
		
		$.ajax({
		url:'message.php',
		type:'POST',
		data:'getALLmessageData='+1,
		success:function(result){
			$('#dynamic-data').html(result);
		}
		});
		}
	});
}
	});

</script>
  	</center>
  </body>
  </html>