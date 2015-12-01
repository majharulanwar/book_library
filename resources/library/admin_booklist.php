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
<th>Book Id</th>    
<th>Serial No</th>
<th>Title</th>
<th >Type</th>
<th >Author</th>
<th >Publication</th>
<th >Edition</th>
<th >Year</th>
<th >Category</th>
<th>Total Holding</th>
<th>Delete</th>
</tr>
<?php
$query = "SELECT * FROM books order by title, type";
$result = mysql_query($query) or die(mysql_error());
$num_supp_name = mysql_num_rows($result);

while ($row = mysql_fetch_array($result)) {

$book_id = $row['book_id'];
$sl_no = $row['sl_no'];
$title = $row['title'];
$type = $row['type'];
$author = $row['author'];
$publication = $row['publication'];
$edition = $row['edition'];
$year = $row['year'];
$category = $row['category'];
$total_holding = $row['total_holding'];

echo "<tr>";
echo "<td >".$book_id."</td>";
echo "<td >".$sl_no."</td>";
echo "<td>".$title."</td>";
echo "<td>".$type."</td>";
echo "<td>".$author."</td>";
echo "<td >".$publication."</td>";
echo "<td>".$edition."</td>";
echo "<td>".$year."</td>";
echo "<td>".$category."</td>";
echo "<td>".$total_holding."</td>";

?>
<td><a href="book_del.php?id=<?php echo $row['book_id']; ?>"><strong>Delete</strong></a> </td>
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
