<?php
$filepath = realpath(dirname(__FILE__));
include_once ($filepath.'/../lib/Session.php');
Session::checkLogin();
include_once ($filepath.'/../lib/Database.php');
include_once ($filepath.'/../helper/Format.php');
?>

<?php
class user
{
	private $db;
	private $fm;

	public function __construct()
	{
		$this->db = new Database();
		$this->fm = new Format();
	}
	public function userLogin($email, $password){
		$username = $this->fm->validation($username);
		$password = $this->fm->validation($password);

		$username = mysqli_real_escape_string($this->db->link, $username);
		$password = mysqli_real_escape_string($this->db->link, $password);

		if (empty($username) || empty($password)) {
		$loginmsg = "Username or Password Must Not Be Empty";
		return $loginmsg;
	} else{

		$query = "SELECT * FROM tbl_admin WHERE username = '$username' AND password = '$password'";
		$result = $this->db->select($query);
		if ($result != false) {
			$value = $result->fetch_assoc();
			Session::set("login", true);
			Session::set("userId", $value['userId']);
			Session::set("username", $value['username']);
			header("Location:index.php");
		}
		else{
			$loginmsg = "Username or Password Must Not Match";
		return $loginmsg;
		}
	}
	}
}
?>