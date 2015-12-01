<?php
ob_start();
include $_SERVER['DOCUMENT_ROOT'] .'/book_library/includes/header.php';
include $_SERVER['DOCUMENT_ROOT'] .'/book_library/includes/connection.php';
include_once $_SERVER['DOCUMENT_ROOT'] .'/book_library/library/function.php';

$user = new user();
//$num_row = $user->book_count();
//$num_loan_row = $user->loan_count();

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
                            <h1>Welcome To Our Admin Panel.</h1>
                        </div>
			<aside>
            </aside>
		</section>
<?php
include $_SERVER['DOCUMENT_ROOT'] .'/book_library/includes/footer.php';
ob_flush(); 
?>	
