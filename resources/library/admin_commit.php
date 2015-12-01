<?php
//ob_start();
session_start();
include $_SERVER['DOCUMENT_ROOT'] .'/book_library/includes/connection.php';
include_once $_SERVER['DOCUMENT_ROOT'] .'/book_library/library/function.php';

$user = new user();

if ($user->admin_session()) {
	header("location:/book_library/library/admin_user_show.php");
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$login = $user->admin_check($_POST['username'],$_POST['password']);
	
	if ($login) {
		header("location:/book_library/library/admin_user_show.php");
	}
	else
	{
		echo '<script type="text/javascript" >alert("Username and Password Wrong");</script>';
	}
}
//ob_flush(); 
?>