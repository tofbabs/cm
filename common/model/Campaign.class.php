<?php

/**
 * Campaign Model
 */
class Campaign extends Model {
	
    protected static $tableName = 'Campaign';
    protected static $primaryKey = 'campaign_id'; 
    

    function getId(){
        return $this->getColumnValue('campaign_id');
    }
    
    function setTitle($value){
        $this->setColumnValue('campaign_title', $value);
    }
    function getTitle(){
        return $this->getColumnValue('campaign_title');
    }

    function setOwner($value){
        $this->setColumnValue('campaign_owner_id', $value);
    }
    function getOwner(){
        return $this->getColumnValue('campaign_owner_id');
    }
    
    /*
    **  Status of Campaign could be PENDING, ONGOING, SENT
    */
    function setStatus($value){
        $this->setColumnValue('campaign_status', $value);
    }
    function getStatus(){
        return $this->getColumnValue('campaign_status');
    }

    /*
    **  Preset Allowable User TPS to be used by PHP-Resque Library
    */
    function setTPS($value){
        $this->setColumnValue('campaign_tps', $value);
    }
    function getTPS(){
        return $this->getColumnValue('campaign_tps');
    }

    /*
    **  Campaign Message
    */
    function setCampaignContent($value){
        $this->setColumnValue('campaign_content', $value);
    }
    function getCampaignContent(){
        return $this->getColumnValue('campaign_content');
    }

    /*
    **  Proposed Campaign Target Size
    */
    function setCampaignSize($value){
        $this->setColumnValue('campaign_target_size', $value);
    }
    function getCampaignSize(){
        return $this->getColumnValue('campaign_target_size');
    }

    /*
    **  Proposed Campaign Sex Ratio
    */
    function setCampaignSexRatio($value){
        $this->setColumnValue('campaign_sex_ratio', $value);
    }
    function getCampaignSexRatio(){
        return $this->getColumnValue('campaign_sex_ratio');
    }

    /*
    **  User could select Multiple Location to be delimited by comma
    */
    function setTargetLocation($value){
        $this->setColumnValue('campaign_target_location', $value);
    }
    function getTargetLocation(){
        return $this->getColumnValue('campaign_target_location');
    }

    /*
    **  Proposed Religion to Target from Base
    */
    function setTargetReligion($value){
        $this->setColumnValue('campaign_target_religion', $value);
    }
    function getTargetReligion(){
        return $this->getColumnValue('campaign_target_religion');
    }

    /*
    **  Proposed Religion to Target from Base
    */
    function setCampaignStartTime($value){
        $this->setColumnValue('campaign_start_time', $value);
    }
    function getCampaignStartTime(){
        return $this->getColumnValue('campaign_start_time');
    }


    function isActive(){

        return $this->getColumnValue('campaign_status') != 'PENDING';

    }


    static function create($title, $owner, $content, $status, $tps, $size, $sex_ratio, $location, $religion, $set_time){
 
        $c = new Campaign();

        $c->setTitle($title);
        $c->setOwner($owner);
        $c->setCampaignContent($content);
        $c->setStatus($status);
        $c->setTPS($tps);
        $c->setCampaignSize($size);
        $c->setCampaignSexRatio($sex_ratio);
        $c->setTargetLocation($location);
        $c->setTargetReligion($religion);
        $c->setCampaignStartTime($set_time);

        $c->save();

        return $c;

    }


}
