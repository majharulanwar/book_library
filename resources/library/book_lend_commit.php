<?php
ob_start();
include $_SERVER['DOCUMENT_ROOT'] .'/book_library/includes/connection.php';

$mem_id = $_SESSION['mem_id'];

$data = array();

$data = $_POST;
//$user = new user();
$result = mysql_query("SELECT username FROM members WHERE mem_id = $mem_id");
$mem_name = mysql_fetch_array($result);

$book_slno = mysql_query("SELECT sl_no FROM books WHERE book_id = '".$data['book_id']."'");
$book_sl = mysql_fetch_array($book_slno);

switch ($_GET['action']) {
    case "add":
      switch ($_GET['type']) {
        case "book":
            $loanstatus='On Loan';
          $sql = "INSERT INTO loan
                   (loan_book_sl,
                    loan_mem_name,
                    loan_date,
                    loan_return_date,
                    loan_status
                    )
                  VALUES
                   ('" . $book_sl['sl_no'] . "',
                    '" . $mem_name['username'] . "',
                    CURDATE(),CURDATE()+7,
                    '" . $loanstatus . "')";
          break;
      }
      break;
  }
  if (isset($sql) && !empty($sql)) {
    echo "<!--" . $sql . "-->";
    $result = mysql_query($sql) or die("Invalid query: " . mysql_error());  
?>
  <p align="center" style="color:#FF0000">
   Done. You will be redirected in few seconds.
  </p>
<?php
  }
?>
<?php
$redirect = '/library/library/book_lend.php';
?>