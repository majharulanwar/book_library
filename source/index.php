<?php
include $_SERVER['DOCUMENT_ROOT'] .'/book_library/includes/header.php';
include $_SERVER['DOCUMENT_ROOT'] .'/book_library/includes/connection.php';
?>
                <section>
			<aside></aside>
			<div id="content">
                            <h1><marquee color="red">Welcome To Online Library</marquee></h1>
                            <p>
                                Welcome to Online Library Library.
                                Here you will find the complete collection of book on our library.
                                Please contact our staff if you want to borrow any books.
                            </p>   
                        </div>
                        
			<aside>
                <form method="POST" action="/book_library/library/login_commit.php"  id="login_form" name="login">
                    <div class="login">
                        <div class="head">
                            <b>Login</b><br/><br/>
                        </div>
                        <label>Username:</label><br/>
                        <input type="text" name="username"  required="true"/><br/>
                        <label>Password:</label><br/>
                        <input type="password" name="password" id="password" required="true"/><br/>
                        <input type="hidden" name="flag" value="login"/>
                        <input type="submit" name="login_btn" onclick="return( submitregistration());" value="Login"/>
                        <label><a style="text-decoration: none;" href="/book_library/library/registration.php">Sign up</a></label>
                    </div>
                </form>
            </aside>
		</section>
<?php
include $_SERVER['DOCUMENT_ROOT'] .'/book_library/includes/footer.php';
?>