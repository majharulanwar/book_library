<?php
include $_SERVER['DOCUMENT_ROOT'] .'/book_library/includes/header.php';
include $_SERVER['DOCUMENT_ROOT'] .'/book_library/includes/connection.php';
?>
                <section>
			<aside></aside>
			<div id="content">
                            <form method="POST" action="/book_library/library/admin_commit.php"  id="login_form" name="login">
                                <div class="login" style="margin-left: 70px;">
                                        <div class="head">
                                            <b>Login</b><br/><br/>
                                        </div>
                                        <label>Username:</label><br/>
                                        <input type="text" name="username"  required="true"/><br/>
                                        <label>Password:</label><br/>
                                        <input type="password" name="password" id="password" required="true"/><br/>
                                        <input type="hidden" name="flag" value="admin"/>
                                        <input type="submit" name="login_btn" onclick="return( submitregistration());" value="Sign In"/>
                                    </div>
                </form>
                        </div>
			<aside></aside>
		</section>
<?php
include $_SERVER['DOCUMENT_ROOT'] .'/book_library/includes/footer.php';
?>