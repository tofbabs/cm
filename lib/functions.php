<?php

/*
**	Define BreadCrumb here
**	
*/


/**
 * Set title of the page
 */
function setTitle($title){
    echo "<title>Etisalat Blacklist - ".$title."</title>\n";
}

function show_select_location($selected = NULL){

	$jsonStates = file_get_contents( BASE_PATH . 'public/site/states.json');
	$arrStates = json_decode($jsonStates,true);

	Utils::printOut($arrStates);

	$arrSelected = array(); 
	$selectStateBody = '';

	if (!is_null($selected)) {
		# code...
		$arrSelected = explode(',', $selected);

	}

	Utils::printOut($arrSelected);

	echo show_select($arrStates, $arrSelected);
	// foreach ($arrStates as $id => $state) {
	// 	# code...
	// 	$name = $state['name'];
	// 	$isSelected = array_search($name, $arrSelected);
	// 	Utils::printOut($isSelected);

	// 	$selectStateBody .= (is_numeric($isSelected)) ?  '<option>' : '<option selected=selected>';
	// 	$selectStateBody .= $name . '</option>' . PHP_EOL;
	// }

	// echo $selectStateBody;
}

/*
**	Function to create HTML select from array
**	$arrAllOption must conform to array('value'=>$value)
*/
function show_select(&$arrAllOption, &$arrSelectedOption = ''){

	$selectBody = '';

	foreach ($arrAllOption as $id => $option) {
		# code...
		$value = $option['value'];
		$isSelected = array_search($value, $arrSelectedOption);
		Utils::printOut($isSelected);
		$selectBody .= (!is_numeric($isSelected)) ?  '<option>' : '<option selected=selected>';
		$selectBody .= $value . '</option>' . PHP_EOL;
	}

	return $selectBody;

}

function createProgressBar($status){

	$barcode = getBarCode($status);
	
	echo '<div class="progress progress-lg">
        <div class="progress-bar progress-bar-' . $barcode. '" role="progressbar" aria-valuenow="' . $status. '" aria-valuemin="0" aria-valuemax="100" style="width: ' . $status. '%">
            ' . $status. '%
        </div>
      </div>';
}

function getBarCode($status){

	if ($status < 20) {
		return 'danger';
	}elseif ($status > 25 && $status < 50) {
		return 'warning';
	}elseif ($status >50 && $status < 90) {
		return 'info';
	}else{
		 return 'success';
	}
}

function getAbb($name){

	$abb = '';
	$arrName = explode(' ', $name);

	if (count($arrName) == 1) {
		# code...
		$abb .= strtoupper(substr($name, 0,2));
	}else{
		foreach ($arrName as $name) {
			# code...

			$abb .= strtoupper(substr($name, 0,1));
			if (count($abb)== 2) break;
		}
	}

	echo $abb;

}

function dispCampaignStatus($status){

	$tag = $color = '';

	switch ($status) {

		case 'approved':
			$status_color = 'warning';
			$tag = 'Pending';
			$sym = 'times';
			$action_color = 'danger';
			$title = 'Stop Campaign';
			break;

		case 'live':
			$status_color = 'success';
			$tag = 'Live';
			$sym = 'times';
			$action_color = 'danger';
			$title = 'Stop Campaign';
			break;

		case 'pending':
		default:
			$status_color = 'warning';
			$tag = 'Unapproved';
			$sym = 'check';
			$action_color = 'success';
			$title = 'Start Campaign';
			break;
	}

	echo '<a href="#" class="btn btn-' . $status_color . ' waves-effect waves-light tooltips" data-placement="top" data-toggle="tooltip" data-original-title="'.$tag.'"> '. $tag .'</a>';

	echo '<a href="#" class="btn btn-lg btn-'.$action_color.' waves-effect waves-light tooltips" data-placement="top" data-toggle="tooltip" data-original-title="'. $title .'">
	    <i class="fa fa-'. $sym .'"></i>
	</a>';

}

?>
