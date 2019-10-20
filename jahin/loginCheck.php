<?php
	
	session_start();

	if(isset($_POST['Sign In'])){

		$ID = $_POST['ID'];
		$password = $_POST['password'];

		if(empty($uname) == true || empty($password) == true){
			echo "null submission!";
		}else{

			if($ID == $password){
				
				$_SESSION['ID'] = $ID;
				$_SESSION['password'] = $password;

				header('location: home.php');

			}else{
				echo "invalid username/password";
			}
		}

	}else{
		header('location: login.html');
	}


?>