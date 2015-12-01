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
<tr>
<th>Member Id</th>    
<th>First Name</th>
<th>Last Name</th>
<th >Email</th>
<th >Date Of Birth</th>
<th >Phone</th>
<th >Nationality</th>
<th >Address</th>
<th>Delete</th>
</tr>
<?php
$query = "SELECT * FROM members order by fname, lname";
$result = mysql_query($query) or die(mysql_error());
$num_supp_name = mysql_num_rows($result);

while ($row = mysql_fetch_array($result)) {

$mem_id = $row['mem_id'];
$fname = $row['fname'];
$lname = $row['lname'];
$email=$row['email'];
$dob=$row['dob'];
$phone=$row['phone'];
$nationality=$row['nationality'];
$address=$row['address'];

echo "<tr>";
echo "<td >".$mem_id."</td>";
echo "<td >".$fname."</td>";
echo "<td>".$lname."</td>";
echo "<td>".$email."</td>";
echo "<td>".$dob."</td>";
echo "<td >".$phone."</td>";
echo "<td>".$nationality."</td>";
echo "<td>".$address."</td>";

?>
<td><a href="member_del.php?id=<?php echo $row['mem_id']; ?>"><strong>Delete</strong></a> </td>
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
