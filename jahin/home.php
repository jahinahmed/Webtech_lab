<?php
	session_start();
	
	if(isset($_SESSION['Name'])){

?>

<!DOCTYPE html>
<html>
<head></head>
<body>
	<h1>Welcome <?=$_SESSION['Name']?> !</h1>
	if($Usertype== Admin){
		<a href="Profile.php">Profile</a>
		<a href="changepass.html">Change Password</a>
		<a href="users.php">View Users</a>
		<a href="logout.php">logout</a>
		}
	else{
		<a href="Profile.php">Profile</a>
		<a href="changepass.html">Change Password</a>
		<a href="logout.php">logout</a>
	    }
		
</body>
</html>

<?php		
	}else{
		header('location: login.html');
	}
?>