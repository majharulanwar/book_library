<?php
include_once $_SERVER['DOCUMENT_ROOT'] .'/book_library/includes/connection.php';

class user
{
	
	public function __construct()
	{
		# code...
	}
        function admin_check($username,$password)
        {
		$result = mysql_query("SELECT * FROM admin WHERE user_name ='$username' AND pass ='$password'");		
		$user_data = mysql_fetch_array($result);

		$no_row = mysql_num_rows($result);
		if ($no_row == 1) {
			$_SESSION['admin'] = true;
			$_SESSION['admin_id'] = $user_data['admin_id'];
			return true;
		}
		else
		{
			return FALSE;
		}
        }
        public function admin_session()
	{
		if (isset($_SESSION['admin'])) {
			return $_SESSION['admin'];
		}
	}
        public function add_book($sl_no,$title,$type,$author,$publication,$edition,$year,$category,$total_holding,$comment)
        {
            $sql = mysql_query("SELECT book_id FROM books WHERE title = '$title' or sl_no = '$sl_no'"); 
            $no_row = mysql_num_rows($sql);
            
            if ($no_row == 0) 
		{
			$sql = mysql_query("INSERT INTO books
				(sl_no,
				title,
				type,
				author,
				publication,
				edition,
				year,
				category,
				total_holding,
				comment)
				VALUES 
				('$sl_no',
				'$title',
				'$type',
				'$author',
				'$publication',
				'$edition',
				'$year',
				'$category',
				'$total_holding',
				'$comment')") or die(mysql_error());
				
			return $sql;
		}
		else
		{
			return FALSE;
		}
        }
        function register_user($fname,$lname,$username,$password,$email,$dob,$phone,$nationality,$address,$comment)
	{

		$password = md5($password);
		$sql = mysql_query("SELECT mem_id FROM members WHERE username = '$username' or email = '$email'");
		$no_row = mysql_num_rows($sql);

		if ($no_row == 0) 
		{
			$sql = mysql_query("INSERT INTO members
				(fname,
				lname,
				username,
				password,
				email,
				dob,
				phone,
				nationality,
				address,
				comment)
				VALUES 
				('$fname',
				'$lname',
				'$username',
				'$password',
				'$email',
				'$dob',
				'$phone',
				'$nationality',
				'$address',
				'$comment')") or die(mysql_error());
				
			return $sql;
		}
		else
		{
			return FALSE;
		}
	}
        public function get_userInfo($mem_id)
        {
            $result = mysql_query("SELECT * FROM members WHERE mem_id = $mem_id");            
            
            $mem = array();
            while($row = mysql_fetch_array($result))
            {
                $data[] = $row;
            }
            return $data;
        }

        public function check_session()
	{
		if (isset($_SESSION['login'])) {
			return $_SESSION['login'];
		}
	}

	public function login_check($username,$password)
	{
		$password = md5($password);

		$result = mysql_query("SELECT * FROM members WHERE username ='$username' AND password ='$password'");
		$user_data = mysql_fetch_array($result);

		$no_row = mysql_num_rows($result);
		if ($no_row == 1) {
			$_SESSION['login'] = true;
			$_SESSION['mem_id'] = $user_data['mem_id'];
			return true;
		}
		else
		{
			return FALSE;
		}
	}

	public function book_count()
	{
		$query = "SELECT * FROM books";
        $result = mysql_query($query);
        if(!$result){
        	die("Database query excution failed: " .mysql_error());
        	return FALSE;
        }
        else
        {
	        $num_row = mysql_num_rows($result);
	        return $num_row;
        }
	}
	public function loan_count()
	{
		$loan_num = "SELECT * FROM loan where loan_status='On Loan'";
        $loan_result = mysql_query($loan_num);
        if (!$loan_result) {
        	die("Database query excution failed: " .mysql_error());
        	return FALSE;
		}
		else
		{
			$num_loan_row = mysql_num_rows($loan_result);
			return $num_loan_row;
		}

	}

	public function user_logout(){
		$_SESSION['login'] = FALSE;
		session_destroy();
	}
}

?>