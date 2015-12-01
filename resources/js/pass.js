function submitregistration() {

	var form = document.reg;

	var ps1 = reg.pass.value;
	var ps2 = reg.cpass.value;
	if (ps1 != ps2) {
			alert("You do not enter the same password. Please try again later...");
			return false;
		}	 
	if(form.fname.value == "")
	{
		alert( "Enter First Name." );
		return false;
	}
	else if (form.lname.value == "") 
	{
		alert("Enter Last Name. ");
		return false;
	}
	else if(form.username.value == "")
	{
		alert( "Enter username." );
		return false;
	}
	else if(form.password.value == "")
	{
		alert( "Enter password." );
		return false;
	}
	else if(form.email.value == "")
	{
		alert( "Enter email." );
		return false;
	}
	else if(form.nationality.value == "")
	{
		alert("Select your nationality");
		return false;
	}
	else if (form.address.value == "") 
	{
		alert("Enter Your address");
		return false;
	}
};