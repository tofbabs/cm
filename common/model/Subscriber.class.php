<?php

/*
**  Subscriber Model
**  Each Subscriber Entry will be saved in in-memory Cache for easy Retrieval
**  Subscriber will be categorized based on number of times it has received content for the day
*/

class Subscriber extends Model {
	
    protected static $tableName = 'Subscriber';
    protected static $primaryKey = 'subscriber_id'; 
    
    function getId(){
        return $this->getColumnValue('subscriber_id');
    }
    
    /*
    **  Masked Subscriber MSISDN,
    **  TODO: Invoke a Salted Encyption beofre saving in Persistent Storage
    */
    function setPhone($value){
        $this->setColumnValue('subscriber_phone', $value);
    }
    function getPhone(){
        return $this->getColumnValue('subscriber_phone');
    }

    /*
    **  Religion
    */
    function setReligion($value){
        $this->setColumnValue('subscriber_religion', $value);
    }
    function getReligion(){
        return $this->getColumnValue('subscriber_religion');
    }

    /*
    **  Gender
    */
    function setGender($value){
        $this->setColumnValue('subscriber_gender', $value);
    }
    function getGender(){
        return $this->getColumnValue('subscriber_gender');
    }

    /*
    **  Subscriber Location
    */
    function setLocation($value){
        $this->setColumnValue('subscriber_location', $value);
    }
    function getLocation(){
        return $this->getColumnValue('subscriber_location');
    }




    


}
