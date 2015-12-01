<?php
ob_start();
include $_SERVER['DOCUMENT_ROOT'] .'/book_library/includes/header.php';
include $_SERVER['DOCUMENT_ROOT'] .'/book_library/includes/connection.php';
include_once $_SERVER['DOCUMENT_ROOT'] .'/book_library/library/function.php';

$user = new user();

$admin_id = $_SESSION['admin_id'];

if (!$user->admin_session()) {
    header("location:/book_library/admin.php");
}

if(isset($_GET['a']))
{
    if ($_GET['a'] == 'logout') {
        $user->user_logout();
        header("location:/book_library/admin.php");
    }
}
?>
                <section>
			<?php
                        include $_SERVER['DOCUMENT_ROOT'] .'/book_library/includes/aside.php';
                        ?>
			<div id="content">
                             <table class="aatable">
                                 <div><a href="/book_library/library/add_book.php">Add Books</a></div>
<tr>
<th>Loan Id</th>    
<th>Book Serial No</th>
<th>Loan Member Name</th>
<th >Loan Date</th>
<th >Return Date</th>
<th >Loan Status</th>
<th>Delete</th>
</tr>
<?php
$query = "SELECT * FROM loan where loan_status = 'On Loan' order by loan_id";
$result = mysql_query($query) or die(mysql_error());
$num_loan = mysql_num_rows($result);

while ($row = mysql_fetch_array($result)) {

$loan_id = $row['loan_id'];
$loan_book_sln = $row['loan_book_sln'];
$loan_mem_name = $row['loan_mem_name'];
$loan_date = $row['loan_date'];
$loan_return_date = $row['loan_return_date'];
$loan_status = $row['loan_status'];

echo "<tr>";
echo "<td >".$loan_id."</td>";
echo "<td >".$loan_book_sln."</td>";
echo "<td>".$loan_mem_name."</td>";
echo "<td>".$loan_date."</td>";
echo "<td>".$loan_return_date."</td>";
echo "<td >".$loan_status."</td>";

?>
<td><a href="loan_del.php?id=<?php echo $row['loan_id']; ?>"><strong>Delete</strong></a> </td>
<?php
echo "</tr>";
}
?>
                             </table>
                        </div>
			<aside>
                              
            </aside>
		</section>
<?php
include $_SERVER['DOCUMENT_ROOT'] .'/book_library/includes/footer.php';
ob_flush(); 
?>	
