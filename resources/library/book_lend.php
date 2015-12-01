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
ob_flush();
?>

<section>
                        <aside></aside>
			<div id="content">
                            <form method="POST" action="book_lend_commit.php?action=add&type=book">
                            <table class="table_content">
                                <tr>
                                    <th>Serial No.</th>
                                    <th>Title</th>
                                    <th>Type</th>
                                    <th>Author</th>
                                    <th>Publication</th>
                                    <th>Edition</th>
                                    <th>Year of Publication</th>
                                    <th>Category</th>
                                    <th>Total Stored</th>
                                    <th>Book Select</th>
                                </tr>
<?php
        $query = "SELECT * FROM books";
        $result = mysql_query($query) or die(mysql_error());                    
        
        $data = array();
        
    while ($row = mysql_fetch_array($result)) {
        $data[] = $row;
    }
?>        
<?php for($i=0; $i<count($data); $i++){ 
    ?>
        <tr>
        <td><?php echo $data[$i]['sl_no']; ?></td>
        <td ><?php echo $data[$i]['title']; ?></td>
        <td ><?php echo $data[$i]['type']; ?></td>
        <td><?php echo $data[$i]['author']; ?></td>
        <td><?php echo $data[$i]['publication']; ?></td>
        <td ><?php echo $data[$i]['edition']; ?></td>
        <td><?php echo $data[$i]['year']; ?></td>
        <td><?php echo $data[$i]['category']; ?></td>
        <td ><?php echo $data[$i]['total_holding']; ?></td>
        
        <td><input type="checkbox" name="select[]" value="<?php $data[$i]['book_id'] ?>" /></td>
        </tr>

<?php } ?>

                            </table>
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
?>