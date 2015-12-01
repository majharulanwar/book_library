<?php
ob_start();
include $_SERVER['DOCUMENT_ROOT'] .'/book_library/includes/header.php';
include $_SERVER['DOCUMENT_ROOT'] .'/book_library/includes/connection.php';
include_once $_SERVER['DOCUMENT_ROOT'] .'/book_library/library/function.php';

$user = new user();
$num_row = $user->book_count();
$num_loan_row = $user->loan_count();

$mem_id = $_SESSION['mem_id'];

if (!$user->check_session()) {
    header("location:/book_library/index.php");
}

if(isset($_GET['a']))
{
    if ($_GET['a'] == 'logout') {
        $user->user_logout();
        header("location:/book_library/index.php");
    }
}
?>
                <section>
			<aside></aside>
			<div id="content">
                            <form>
                                <div>Book Serial Number</div>
                                <select name="loan_book_slno" >
                                    <option value="" selected >Select a serial number...</option>
<?php $book_sql="SELECT  * from loan where loan_status='On Loan' ";
$result=mysql_query($book_sql) or die (mysql_error());
while ($row=mysql_fetch_array($result)) {
    $slno[$row['loan_id']]=$row['loan_book_sln'];
}

  foreach ($slno as $loan_id => $loan_book_sln) {
?>
        <option value="<?php echo $loan_book_sln; ?>" ><?php
        echo $loan_book_sln; ?></option>
<?php
  }
?>
      </select>
          <div id="UILabel">Return Date [ yyyy-mm-dd ]</div>
            <input class="form_tfield" type="text" name="loan_date" value="<?php echo date('Y-m-d')?>" /><br><br>

            <input type="submit" value="Submit" />
            <input  type="reset" value="Clear Form" />
                            </form>
                        </div>
			<aside>
                <?php
                    include $_SERVER['DOCUMENT_ROOT'] .'/book_library/includes/bookinfo.php';
                ?>                
            </aside>
		</section>
<?php
include $_SERVER['DOCUMENT_ROOT'] .'/book_library/includes/footer.php';
ob_flush(); 
?>	
