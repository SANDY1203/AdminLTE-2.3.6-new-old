<?php
	if(isset($_POST['id']) && isset($_POST['first_name']) && isset($_POST['last_name']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['role']))
	{
		// include Database connection file 
		include("db_connection.php");

		// get values 
		$id = $_POST['id'];
        $first_name = $_POST['first_name'];
		$last_name = $_POST['last_name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
		$role = $_POST['role'];

		$query = "INSERT INTO users(id,first_name,last_name,email,password,role) VALUES('$id', '$first_name', '$last_name', '$email', '$password', '$role')";
		if (!$result = mysql_query($query)) {
	        exit(mysql_error());
	    }
	    echo "1 Record Added!";
	}
?>