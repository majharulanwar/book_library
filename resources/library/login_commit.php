<?php
//ob_start();
session_start();
include $_SERVER['DOCUMENT_ROOT'] .'/book_library/includes/connection.php';
include_once $_SERVER['DOCUMENT_ROOT'] .'/book_library/library/function.php';

$user = new user();

if ($user->check_session()) {
	header("location:/book_library/library/home.php");
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$login = $user->login_check($_POST['username'],$_POST['password']);
	
	if ($login) {
		header("location:/book_library/library/home.php");
	}
	else
	{
		echo '<script type="text/javascript" >alert("Please enter your username & password correctly");</script>';
	}
}
//ob_flush(); 
?>