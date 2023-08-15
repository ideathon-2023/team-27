<?php
	
	$Username = $_POST['Username'];
	$SID = $_POST['SID'];

	// Database connection
	$conn = mysqli_connect('localhost','root','','final_login');
	if(!$conn){
		echo "$conn->connect_error";
		die("Connection Failed : ".mysqli_connect_error());
	}
	else{
		$stmt = $conn->prepare("insert into registration(Username,SID) VALUES(?, ?)");
		$stmt->bind_param("si", $Username, $SID);
		$execval = $stmt->execute();
		echo $execval;
		///echo "Registration successfully...";
		header('location:index.php');
		$stmt->close();
		$conn->close();

	}
	
?>
