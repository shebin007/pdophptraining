<html>
<head>
</head>
<body>

<?php
	//Validating data
	if($_POST["email"]==""){
		echo "You did not enter an email address";
		exit;
	}

	else{
	
	//accessing data
	$email = $_POST["email"];

	$msg = $_POST["usrmsg"];
	$reply = false;
	if(isset($_POST["replywnt"]))
		{	
			$reply = true;
		}
	else{
		$reply = false ;
	}

	//replying data
	echo "Hello ". $email ."we receieved your enguiry";
	if(!$reply)
	{
		echo "we wont reply you".$msg;
	}
	else{
		echo "and we will reply to you".$msg;
	}

}
?>
</body>
