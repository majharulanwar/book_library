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

if ($_SERVER['REQUEST_METHOD'] == "POST") {
	
	//print_r($_POST);
	//exit();
	$add_book = $user->add_book($_POST['sl_no'],$_POST['title'],$_POST['type'],$_POST['author'],
		$_POST['publication'],$_POST['edition'],$_POST['year'],
		$_POST['category'],$_POST['total_holding'],$_POST['comment']);

	if ($add_book) {
            header("location:/book_library/library/admin_booklist.php");
	}
	else
	{
            echo '<script type="text/javascript" >alert("Opps Somethings Went wrong");</script>';
	}
}
?>
                <section>
			<?php
                        include $_SERVER['DOCUMENT_ROOT'] .'/book_library/includes/aside.php';
                        ?>
			<div id="content">
                            <h1>Book Insertion</h1>
                               <form method="POST" action="" name="reg">
						<label>Book Serial:</label><input class="form_input" type="text" Name="sl_no" required="true"/><em>*</em><br/>
						<label>Book Title:</label>&nbsp;&nbsp;<input class="form_input" type="text" Name="title" required="true"/><em>*</em><br/>
						<label>Book Type:</label>&nbsp;&nbsp;<input class="form_input" type="text" Name="type" required="true"/><em>*</em><br/>
						<label>Author:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="form_input" type="text" Name="author" id="pass" required="true"/><em>*</em><br/>
						<label>Publication:</label><input class="form_input" type="text" Name="publication" required="true"/><em>*</em><br/>
						<label>Edition:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="form_input" type="text" Name="edition" required="true"/><em>*</em><br/>
                                                <label>Year:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="form_input" type="text" Name="year" required="true" /><em>*</em><br/>
                                                <label>Category:</label>&nbsp;&nbsp;&nbsp;<input class="form_input" type="text" Name="category" required="true" /><em>*</em><br/>
						<label>Total Books:</label><input class="form_input" type="text" Name="total_holding" required="true"/><em>*</em><br/>
						<label>Comment:</label><TEXTAREA NAME="comment" COLS=30 ROWS=3></TEXTAREA><br/>
						<input type="submit" value="Submit" onclick="" value="register" />
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
