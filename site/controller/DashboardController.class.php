<?php

/**
 * 	Site Index Controller
 *	Handles Login to Platform
 * 	Redirects to Dashboard
**/

class DashboardController extends Controller {
	
	function __construct() {
		parent::__construct();
		Utils::printOut('I got here');


		if(!isset($_SESSION['cm_user'])){

		    $this->setView('', 'login');


		}else{

			$this->initDashboard($_SESSION['cm_user']);
		}
	}


	function index(){

        if(isset($_POST['loginBtn'])){

            $email = isset($_POST['email']) ? trim($_POST['email']) : exit('Enter Email Address');
            $password = isset($_POST['password']) ? $_POST['password'] : exit('Enter a Password');

            $u = User::getOne(array('user_email' => $email));
         	Utils::printOut($u);
          	
          	if ($u->getId() == NULL) {
          		# code...

          		$this->notifyBar('error', 'Wrong Username/Password.');
          		$this->setView('', 'login');
          		exit();
          	}

            if (!$u->isActive()) {
            	# code...
            	$this->notifyBar(
            		'error', 
            		'Kindly follow <a href="'. ROOT_URL .'/login/reset/' . Utils::encode_email($u->getEmail()) . '"> to Reset Your Password</a>');

            	$this->setView('', 'login');
            	exit();
            }

            if($u->getPassword() == md5($password)){

            	if(!$u->isActive()) {

            		$u->setActive(1);
            		$u->save();

            	}
            	// Start Session            	
            	$_SESSION['cm_user'] = $u->getId();
            	$this->initDashboard($u->getId());

            
            }
            
        }

        // if(	!isset($_SESSION['cm_user']) ) header('Location: ' . ROOT_URL . '/login');

        // $session_cm_user = $_SESSION['cm_user'];
        // $this->initDashboard($session_cm_user);
		
	}

	public function initDashboard($user_id){

		$this->setView('', 'index');
		

	}
   
}

?>