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
?>
                <section>
			<?php
                        include $_SERVER['DOCUMENT_ROOT'] .'/book_library/includes/aside.php';
                        ?>
			<div id="content">
                            <form action="cat_commit.php" method="post">
                                <div id="UILabel">Category Name</div>
                                <input class="form_tfield" type="text" name="ct_name" value="" /><br><br>
                                <input type="submit" value="Submit" />
                                <input  type="reset" value="Clear Form" />
                            </form>
                        </div>
			<aside>
                              
            </aside>
		</section>
<?php
include $_SERVER['DOCUMENT_ROOT'] .'/book_library/includes/footer.php';
ob_flush(); 
?>	
