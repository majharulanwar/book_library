<?php
include $_SERVER['DOCUMENT_ROOT'] .'/book_library/includes/connection.php';

$sql = "INSERT INTO category (ct_name) VALUES ('" . $_POST['ct_name'] . "')";

if (isset($sql) && !empty($sql)) {
    echo "<!--" . $sql . "-->";
    $result = mysql_query($sql)
      or die("Invalid query: " . mysql_error());
?>
  <p align="center" style="color:#FF0000">
   Done. You will be redirected in few seconds.

  </p>
<?php
  }
?>
<?php
$redirect = '/book_library/library/catlist.php';
?>
  <script LANGUAGE="JavaScript" src="../js/redir.js"></script>
<BODY onLoad="redirTimer()">