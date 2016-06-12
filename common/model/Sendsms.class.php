<?php
/**
 * User Model
 */
class SendSms extends Model {
	
    protected static $tableName = 'send_sms';
    protected static $primaryKey = 'sql_id';

    // Default value is MT and should be Fixed
    function setMomt($value="MT"){
        $this->setColumnValue('momt', $value);
    }

    function setSender($value){
        return $this->setColumnValue('sender', $value);
    }

    function setReceiver($value){
        return $this->setColumnValue('receiver', $value);
    }

    function setMsgdata($value){
        return $this->setColumnValue('msgdata', $value);
    }

    function setSmsc($value){
        $this->setColumnValue('smsc_id', $value);
    }

    // For reporting update account making the send_sms request
    function setAccount($value){
        # code...
        return $this->setColumnValue('account', $value);
    }

    // For reporting update account making the send_sms request
    function setMClass($value){
        # code...
        $this->setColumnValue('mclass', $value);
    }

    // For reporting update account making the send_sms request
    function setCoding($value = 2){
        # code...
        $this->setColumnValue('coding', $value);
    }

    // Default Value is 2 and should be fixed
    function setSmstype($value=2){
        # code...
        return $this->setColumnValue('sms_type', $value);
    }

    // Default value is 11 (Delivered to Phone - 1, Not Delivered to PHone -2, Delivered to SMSC - 8)
    function setDLRMask($value = 11){
        return $this->setColumnValue('dlr_mask', $value);
    }

    function setDLRUrl($value){
        return $this->setColumnValue('dlr_url', $value);
    }  

    // Required for Log Purposes. Update with Milliseconds time
    function setTime($value){
        return $this->setColumnValue('time', $value);
    }  


    static function create($value="MT", $sender,  ){

        
    }
    

}
