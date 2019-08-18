<?php include('part/db_connect.php'); ?>

<?php
	if(isset($_POST['Submit'])){
		$user_id=$_POST['user_id'];
		$password=$_POST['password'];
		$name=$_POST['name'];
		$address=$_POST['address'];
		$country=$_POST['country'];
		$zip=$_POST['zip'];
		$email=$_POST['email'];
		$sex=$_POST['sex'];
		$language=$_POST['language'];
		$about=$_POST['about'];
		
		

		$query="INSERT INTO cse482 (user_id,password,name,address,country,zip,email,sex,language,about) VALUES('{$user_id}','{$password}','{$name}','{$address}','{$country}','{$zip}','{$email}','{$sex}','{$language}', '{$about}');";
		$performQuery=mysqli_query($connection, $query);

		if(!$performQuery)
			echo 'Query unsuccessful';

		$insertedId=mysqli_insert_id($connection);
		// header('Location: patientReceipt.php?patientId='.$insertedId);
		// exit();

	}
?>

<?php include('part/db_close.php'); ?>