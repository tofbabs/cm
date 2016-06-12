<?php

/**
 * 	User Controller
**/

class UserController extends Controller {
	
	function __construct() {
		parent::__construct();

		if(!isset($_SESSION['user'])){

		    $this->setView('', 'login');

		}

		// Page accesible to only admin users
		// If User is provider resolve back to home page
		if (!User::getOne(array( 'user_id' => $_SESSION['user']))->isAdmin()) {
			new DashboardController();
			exit;
		}
	}

	function index(){

		$this->setView('', 'all-users');

		$users = User::getAll(array('user_role' => 'provider'));
		$this->setVariable('users', $users);

	}

	function add(){

		$this->setView('', 'new-user');		

	}

	function _addNewUser(){

		if (isset($_POST['newUserBtn'])) {
			# code...
			$name = isset($_POST['user_name']) ? $_POST['user_name'] : '';
			$email = isset($_POST['user_email']) ? $_POST['user_email'] : '';
			$phone = isset($_POST['user_phone']) ? $_POST['user_phone'] : '';
			$daily_max = isset($_POST['daily_max']) ? $_POST['daily_max'] : '';
			$allowable_tps = isset($_POST['allowable_tps']) ? $_POST['allowable_tps'] : '';
			$shortcode = isset($_POST['shortcode']) ? $_POST['shortcode'] : '';
			$role = isset($_POST['user_role']) ? $_POST['user_role'] : '';

			$u = User::create($name, $email, $phone, $daily_max, $allowable_tps, $shortcode, $role);

			Utils::printOut('200:User Created');

			$subject = "New User";
			$body = "Dear ". $name .PHP_EOL . 'Kindly reset your password here ' . ROOT_URL . '/login/reset/' . Utils::encode_email($email);

			// Send Welcome Email to user
			Utils::sendmail($u->getEmail(), $subject, $body, EMAIL_HEADER);
		}
	}
   
}

?>