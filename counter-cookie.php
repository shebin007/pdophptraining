<?php
	if(isset($_COOKIE['counter']));
		$count = $_COOKIE['counter'];
	else
		$count = 0;
		$count = $count+1;
		setcookie ('counter',$count,'0,')
?>
