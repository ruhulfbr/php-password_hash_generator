<?php 
	
	if( !empty( $_GET['generate'] ) ){
		$string = $_GET['string'];
		$alg    = $_GET['algorithm'];


		if($alg == 'PASSWORD_BCRYPT'){
			$hash = password_hash($string, PASSWORD_BCRYPT);
		}
		else{
			$hash = password_hash($string, PASSWORD_DEFAULT);
		}

		echo $hash;
		exit();
	}

	if( !empty( $_GET['verify'] ) ){
		$password = $_GET['password'];
		$hash     = $_GET['hash'];

		if(password_verify($password, $hash)){
			echo "TRUE";
		}
		else{
			echo "FALSE";	
		}
		exit();
	}

?>