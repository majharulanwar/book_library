<?php
include $_SERVER['DOCUMENT_ROOT'] .'/book_library/includes/connection.php';
include_once $_SERVER['DOCUMENT_ROOT'] .'/book_library/library/function.php';

$user = new user();
//print_r($_POST);
//exit();
if ($user->check_session()) {
	header("location:/book_library/library/home.php");
}

if ($_SERVER['REQUEST_METHOD'] == "POST") {
	
	//print_r($_POST);
	//exit();
	$register = $user->register_user($_POST['fname'],$_POST['lname'],$_POST['username'],$_POST['password'],
		$_POST['email'],$_POST['dob'],$_POST['phone'],
		$_POST['nationality'],$_POST['address'],$_POST['comment']);

	if ($register) {
            echo '<script type="text/javascript" >alert("Registration Complete");</script>';
            header("loaction:/book_library/index.php");
	}
	else
	{
		echo '<script type="text/javascript" >alert("Registration Failed. Email and Username Already Exit please Try Again");</script>';
	}
}


?>