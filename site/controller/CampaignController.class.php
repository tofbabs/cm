<?php

/**
 * 	Campaign Controller
**/

class CampaignController extends Controller {
	
	function __construct() {
		parent::__construct();

		if(!isset($_SESSION['cm_user'])){

		    $this->setView('', 'login');

		}
	}

	function index(){

		$this->setView('', 'all-campaign');

		$all_campaign = Campaign::getAll();

		$campaigns = array();

		foreach ($all_campaign as $key => $c) {
			# code...
			$buf['campaign_owner'] = User::getOne(array('user_id' => $c->getOwner()))->getName();
			$buf['campaign_start'] = $c->getCampaignStartTime();
			$buf['campaign_target'] = $c->getTargetLocation();
			$buf['total_reach'] = $c->getCampaignSize();
			$buf['campaign_status'] = strtolower($c->getStatus());
			$buf['campaign_progress'] = $c->isActive() ? Utils::getCampaignStatus($c->getId()) : 0;

			array_push($campaigns,$buf);
		}

		$this->setVariable('campaigns', $campaigns);

	}

	function add(){

		// Flag to show Edit
		$this->setVariable('isEdit', FALSE);
		$this->setView('', 'new-campaign');

	}

	function send(){

		$owner = $_SESSION['cm_user'];
		$user = User::getOne(array('user_id' => $_SESSION['cm_user']));

		$status = 'PENDING';

		$title = $_POST['campaign_title'];
		$content = $_POST['campaign_message'];
		$shortcode = $_POST['shortcode'];
		$size = $_POST['target_size'];
		$sex_ratio = $_POST['sex_ratio'];
		$religion = $_POST['religion'];
		// Concatenate State of Interest by comma
		$location = implode(',', $_POST['state']);

		$start_date = date('Y-m-d', strtotime($_POST['start_date']));
		$start_time = date("H:i", $_POST['start_time']);
		$set_time = $start_date . ' ' . $start_time;
		// $set_time = new DateTime($start_date . ' ' . $start_time);
		// date("H:i", strtotime("04:25 PM"));
		// echo $set_time->format('U');

		// Persistent Campaign Storage
		$c = Campaign::create($title, $owner, $content, $status, $user->getDefaultTPS(), $size, $sex_ratio, $location, $religion, $set_time);

	}

	function edit($cid){

		// Flag to show Edit
		$this->setVariable('isEdit', TRUE);

		$this->setView('', 'new-campaign');
		// Get Campaign Details
		$c = Campaign::getOne(array('campaign_id' => $cid));
		$this->setVariable('campaign', $c);

		// Get User Details
		$u = User::getOne(array('user_id' => $_SESSION['cm_user']));
		$this->setVariable('user', $u);


	}

	function approve($cid){

		$c = Campaign::getOne(array('campaign_id' => $cid));

		// $c->se
		$time = $c->getCampaignStartTime();

		$args = array(
			'title' => $c->getTitle(),
			'msg' => $c->getMsg(),
			'shortcode' => $c->getShortcode(),
			'target_state' => $c->getTargetLocation(),
			'tps' => $c->getTPS()
		);

		ResqueScheduler::enqueueAt($time, 'campaign', 'SetCampaign', $args);
	}
   
}

?>