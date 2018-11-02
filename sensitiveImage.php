<?php
		$image=$_GET["image"];
		
		if(empty($image)){
			echo json_encode('[-1]');
		}
		else{
			$array = array(rand(0, 1),$image);
			echo json_encode($array);
		}
?>


