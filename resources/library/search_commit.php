<?php
ob_start();
include $_SERVER['DOCUMENT_ROOT'] .'/book_library/includes/header.php';
include $_SERVER['DOCUMENT_ROOT'] .'/book_library/includes/connection.php';
include_once $_SERVER['DOCUMENT_ROOT'] .'/book_library/library/function.php';

$user = new user();

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
                                </tr>
<?php
if ($_POST[search_type]=='all')
    {
        $query = "SELECT * FROM books WHERE
        sl_no LIKE '%$_POST[keyword]%'||
        title LIKE '%$_POST[keyword]%' ||
        type LIKE '%$_POST[keyword]%' ||
        author LIKE '%$_POST[keyword]%'||
        publication LIKE '%$_POST[keyword]%'||
        edition LIKE '%$_POST[keyword]%'||
        year LIKE '%$_POST[keyword]%'||
        category LIKE '%$_POST[keyword]%'||
        total_holding LIKE '%$_POST[keyword]%'";
        $result = mysql_query($query) or die(mysql_error());                    
    }
    else {
        $query = "SELECT * FROM books WHERE $_POST[search_type] LIKE '%$_POST[keyword]%'";
        $result = mysql_query($query) or die(mysql_error());
    }
    while ($row = mysql_fetch_array($result)) {
        $sl_no = $row['sl_no'];
        $title = $row['title'];
        $type = $row['type'];
        $author=$row['author'];
        $publication=$row['publication'];
        $edition=$row['edition'];
        $year=$row['year'];
        $category=$row['category'];
        $total_holding=$row['total_holding'];
        
        echo "<tr>";
        echo "<td>".$sl_no."</td>";
        echo "<td >".$title."</td>";
        echo "<td >".$type."</td>";
        echo "<td>".$author."</td>";
        echo "<td>".$publication."</td>";
        echo "<td >".$edition."</td>";
        echo "<td>".$year."</td>";
        echo "<td>".$category."</td>";
        echo "<td >".$total_holding."</td>";
        echo "</tr>";
    }
?>
                            </table>
                        </div>
		</section>

<?php
include $_SERVER['DOCUMENT_ROOT'] .'/book_library/includes/footer.php';
?>