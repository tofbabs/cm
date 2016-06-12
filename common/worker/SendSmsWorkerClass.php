<?php 

class SendSmsWorker {

    public function perform() {
        // The code for video conversion here
    	// echo "I am converting a video now";
    	SendSms::create($momt, $sender, $receiver, $account, $coding, $dlr_mask, $dlr_url, $mclass, $msgdata, $sms_type);

        var_dump($this->args);
    }

}