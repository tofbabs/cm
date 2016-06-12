<?php

/**
 * 	Login Controller
**/

class LoginController extends Controller {

	function __construct() {
		parent::__construct();
	}

	function index(){
	    
	    if (isset($_SESSION['cm_user'])) {
	    	unset($_SESSION['cm_user']);
	    }

		$this->setView('', 'login');
		 
	}

	function reset($user_encode_email=null){

        $this->setView('', 'recover-pwd');

        if (isset($_POST['resetBtn'])){

            $u = User::getOne(array('user_email' => $_POST['email']));

            if ($u->getId() != null ) {
                # code...
                $msg = 'Kindly follow this link to reset your password '. ROOT_URL .'/login/reset/' . Utils::encode_email($u->getEmail());
                Utils::printOut($msg);
                Utils::sendmail("RESET PASSWORD" , $msg, $_POST['email'], EMAIL_HEADER);
                $this->notifyBar('success', 'Please Check ' . $_POST['email'] . ' for your password');

            }else{
                $this->notifyBar('error', 'Account not found');

            }

        }

        if (!is_null($user_encode_email)) {
            # code...
            $this->setVariable('user_email', Utils::decode_email($user_encode_email));
            $this->setView('', 'reset-pwd');

        }

        if (isset($_POST['changePwdBtn'])) {
            # code...
            $u = User::getOne(array('user_email'=> $_POST['email']));
            $u->setPassword($_POST['password']);
            $u->setActive(1);

            $u->save();

            Utils::printOut($u);
            $this->notifyBar('success', 'Your Password now reset. Kindly Login below');

            $this->setView('', 'login');

        }

    }
   
}

?>