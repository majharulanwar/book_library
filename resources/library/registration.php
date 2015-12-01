<?php
include $_SERVER['DOCUMENT_ROOT'] .'/book_library/includes/header.php';
include $_SERVER['DOCUMENT_ROOT'] .'/book_library/includes/connection.php';
?>
		<section>
			<aside>
                <p>Register On This Online Library To:</p>
                <ul>
                	<li>You Can Lending Books</li>
                	<li>You Can Read Books on online</li>
                	<li>Save articles, publications and searches to your profile</li>
                	<li>Receive email updates and promotional offers</li>
                </ul>
			</aside>
			<div id="content">
				<h1>Registration</h1>
				<p class="requiredFieldsText"><em>* = Required Field</em></p>
				<div class="r_form">
					<form method="POST" action="/book_library/library/addmember.php" name="reg">
						<label>First Name:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="form_input" type="text" Name="fname" required="true"/><em>*</em><br/>
						<label>Last Name:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="form_input" type="text" Name="lname" required="true"/><em>*</em><br/>
						<label>User Name:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="form_input" type="text" Name="username" required="true"/><em>*</em><br/>
						<label>Password:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="form_input" type="password" Name="password" id="pass" required="true"/><em>*</em><br/>
						<label>Retype-Password:</label>&nbsp;<input class="form_input" type="password" Name="r-password" id="cpass" required="true"/><em>*</em><br/>
						<label>Email:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="form_input" type="text" Name="email" required="true"/><em>*</em><br/>
						<label>Date of Birth:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="form_input" type="text" Name="dob" /><br/>
						<label>Phone:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="form_input" type="text" Name="phone" /><br/>
						<label>Nationality:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="form_input" type="text" Name="nationality" required="true"/><em>*</em><br/>
						<label>Address:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="form_input" type="text" Name="address" required=""true><em>*</em><br/>
						<label>Comment:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<TEXTAREA NAME="comment" COLS=30 ROWS=3></TEXTAREA><br/>
						<input type="submit" value="Submit" onclick="return( submitregistration());" value="register" />
						<input  type="reset" value="Clear Form" />
					</form>
				</div>
            </div>
			<aside>
                
            </aside>
		</section>
<?php
include $_SERVER['DOCUMENT_ROOT'] .'/book_library/includes/footer.php';
?>