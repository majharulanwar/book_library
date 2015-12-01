<?php
//database connection
$connection = mysql_connect("localhost","root","");
if(!$connection){
    die("Database connection Failed:" .  mysql_error());
}
//select database
$db_select = mysql_selectdb("books_library", $connection);
if(!$db_select){
    die("Database connection failed:" .mysql_error());
}
?>
