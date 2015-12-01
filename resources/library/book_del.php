<?php
include $_SERVER['DOCUMENT_ROOT'] .'/book_library/includes/connection.php';

$data = array();
$data = $_GET;

$sql = "DELETE FROM books WHERE book_id ='".$data['id']."'";
$data = mysql_query($sql) or die(mysql_error());

if($data)
{
    header('location: /book_library/library/admin_booklist.php');
}
 else {
     echo '<script type="text/javascript" >alert("Opps Somethings Went wrong");</script>';
}
?> 
?>
