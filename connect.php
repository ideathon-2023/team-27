<?php
	$conn = mysqli_connect('localhost','root','','final_login',3306) or die ("Connection failed");
	if(!empty($_POST['login']))
	{
		$Username = $_POST['Username'];
		$Password = $_POST['Password'];
		$query="SELECT * from registration WHERE Username='$Username' and Password='$Password' ";
		$resu=mysqli_query($conn,$query);
		$cou=mysqli_num_rows($resu);
		if($cou>0)
		{
			header('location: index.php');
			echo "Login successful";
		}
		else
		{
			echo "Login unsuccessful";
		}
	}
?>
