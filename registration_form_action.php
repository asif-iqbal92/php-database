<?php 
	session_start();
	$con = mysqli_connect("localhost", "root", "", "wtk");

	if(isset($_POST['Submit']))
	{
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$gender = $_POST['gender'];
		$birthday = $_POST['birthday'];
		$religion = $_POST['religion'];
		$presentAddress = $_POST['presentAddress'];
		$permanentAddress = $_POST['permanentAddress'];
		$phone = $_POST['phone'];
		$email = $_POST['email'];
		$url = $_POST['url'];
		$username = $_POST['username'];
		$password = $_POST['password'];


		$query = "INSERT INTO user (First Name, Last Name, Gender, Date of Birth, Religion, Present Address, Permanent Address, Phone, Email, Web Link, Username, Password ) values ('$fname', '$lname', '$gender', '$birthday', '$religion', '$presentAddress', '$permanentAddress', '$phone', '$email', '$url', '$username', '$password')";
		$query_run = mysqli_master_query($con, $query);

		if ($query_run)
		{
			$_SESSION['status'] = "Registration Successful";
			header("Location: file-io.php");
		}
	}

?>