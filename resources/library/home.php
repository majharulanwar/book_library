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
                            <h1><marquee color="red">Welcome To Online Library</marquee></b></h1>
                            <p>
                                Welcome to Online Library Library.
                                Here you will find the complete collection of book on our library.
                                Please contact our staff if you want to borrow any books.
                            </p>
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
