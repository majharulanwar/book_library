<?php
include $_SERVER['DOCUMENT_ROOT'] .'/book_library/includes/connection.php';


switch ($_GET['action']) {
    case "edit":

          $sql = "UPDATE loan SET
                   loan_return_date='" . $_POST['loan_return_date'] . "',
                    loan_status = 'Returned'
                  WHERE loan_book_sln = '" . $_POST['loan_book_sln'] . "'";

          break;
      }


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
$redirect = '/library/index.php';
?>