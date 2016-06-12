<?php

/**
 * 	User Controller
**/

class SubController extends Controller {
	
	function __construct() {
		parent::__construct();

		if(!isset($_SESSION['user'])){

		    $this->setView('', 'login');

		}
	}

	function index(){

		$this->setView('', 'subscriber');

	}

	function add(){

		$this->setView('', 'add-subscriber');

	}
   
}

?>