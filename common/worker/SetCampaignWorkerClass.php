<?php 

/*
**	Class is used to preset Campaign SMS 
**	args 
*/
class SetCampaignWorker {

    public function perform() {



        // The code for video conversion here
    	echo "I am converting a video now";
        var_dump($this->args);

    }

}