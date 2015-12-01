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
                            <a href="/book_library/library/book_lend.php"><div id="box1">Book Lending</div></a>
                            <a href="/book_library/library/book_return.php"><div id="box2">Book Return</div></a>
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
