<?php

/**
 * 	Test Controller
**/

// use \Resque\Resque as Resque;

class TestController extends Controller {
	
	function __construct() {
		parent::__construct();
	}

	function index(){

		Resque::enqueue('convert', 'VideoConversion', array('origine-video.avi', 'destination-video.avi'));
		$this->setView('', 'all-users');

	}

}

?>