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
				<form method="POST" action="search_commit.php" id="book_search" name="books_search">
					<p>Here you can search any books. You can search your<br/> books by using keyword. </p>
					<label>Search</label><br/>
					<input type="text" name="keyword" value="" /><br><br>

  					<select name="search_type" >
                                                <option selected>...Search by Keyword...</option>
                                                <option value="all">All Type</option>
                                                <option value="author">Search by author</option>
                                                <option value="category">Search by category</option>
                                                <option value="title">Search by title</option>
                                                <option value="sl_no">Search by serial number</option>
                                        </select><br><br>
					<input type="submit" value="Search" />
					<input  type="reset" value="Clear all" />
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