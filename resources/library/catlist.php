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
<?php
    $query = "SELECT * FROM category ";
    $result = mysql_query($query) or die(mysql_error());
    $num_cat_name = mysql_num_rows($result);
?>
                            <table class="aatable" style="width:500px; position:relative;left:-30px;">
                                <div><a href="/book_library/library/add_category.php">Add Category</a></div>
                                <tr>
                                <th >Category ID</th>
                                <th>Category Name</th>
                                <th>Delete</th>
                                </tr>
                                <?php

                                while ($row = mysql_fetch_array($result)) {

                                $ct_id = $row['ct_id'];
                                $ct_name = $row['ct_name'];

                                echo "<tr>";
                                echo "<td>".$ct_id."</td>";
                                echo "<td >".$ct_name."</td>";
                                ?>
                                <td><a href="ct_del.php?id=<?php echo $row['ct_id']; ?>"><strong>Delete</strong></a> </td>

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
