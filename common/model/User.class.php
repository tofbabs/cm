<?php
/**
 * User Model
 */


class User extends Model {
	
    protected static $tableName = 'Users';
    protected static $primaryKey = 'user_id'; 
    

    function getId(){
        return $this->getColumnValue('user_id');
    }
    
    function setName($value){
        $this->setColumnValue('user_name', $value);
    }
    function getName(){
        return $this->getColumnValue('user_name');
    }

    function setPassword($value){
        $this->setColumnValue('user_password', md5($value));
    }
    function getPassword(){
        return $this->getColumnValue('user_password');
    }
    
    // Email is Unique Variable
    function setEmail($value){
        $this->setColumnValue('user_email', $value);
    }
    function getEmail(){
        return $this->getColumnValue('user_email');
    }

    // Email is Unique Variable
    function setPhone($value){
        $this->setColumnValue('user_phone', $value);
    }
    function getPhone(){
        return $this->getColumnValue('user_phone');
    }

    /*
    **  Preset Allowable User Campaign Size to restrict on the interface
    */
    function setCampaignSize($value){
        $this->setColumnValue('user_campaign_size', $value);
    }
    function getCampaignSize(){
        return $this->getColumnValue('user_campaign_size');
    }

    /*
    **  Preset Allowable User TPS to be used by PHP-Resque Library
    */
    function setDefaultTPS($value){
        $this->setColumnValue('user_tps', $value);
    }
    function getDefaultTPS(){
        return $this->getColumnValue('user_tps');
    }
    
    /*
    **  System Role Managemnet/Access Restriction
    */
    function setRole($value){
        $this->setColumnValue('user_role', $value);
    }
    function getRole(){
        return $this->getColumnValue('user_tps');
    }


    function setShortcode($value){
        $this->setColumnValue('shortcode', $value);
    }
    function getShortcode(){
        return $this->getColumnValue('shortcode');
    }

    function isAdmin(){
        return $this->getColumnValue('user_role') == 'admin';
    }
    function isProvider(){
        return $this->getColumnValue('user_role') == 'provider';
    }

    //  Set Level e.g. Secondary or Primary
    function setActive($value){
        $this->setColumnValue('user_status', $value);
    }
    // Returns False if User is inactive | True if otherwishe
    function isActive(){
        return $this->getColumnValue('user_status') == 1;
    }

    static function create($name, $email, $phone, $daily_max, $allowable_tps, $shortcode, $role){

        $u = new User();

        $u->setName($name);
        $u->setEmail($email);
        $u->setPhone($phone);
        $u->setCampaignSize($daily_max);
        $u->setTPS($allowable_tps);
        $u->setShortcode($shortcode);
        $u->setRole($role);
        $u->setPassword(Utils::generatePassword());
        $u->setActive(0);

        $u->save();

        return $u;

    }

}
