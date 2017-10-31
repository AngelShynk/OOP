<?php
/**
 * Created by PhpStorm.
 * User: Angel
 * Date: 31.10.2017
 * Time: 20:55
 */

class Moderator extends User
{
    public function getUsername()
    {
        return $this->username;
    }
    public function getStructure()
    {
        return $this->structure;
    }

    public function getFacilities()
    {
        return $this->facilities;
    }
    public function setUsername($username)
    {
        $this->username = $username;
    }
    public function setStructure($structure)
    {
        $this->structure = $structure;
    }
    public function setFacilities($facilities){
        $this->facilities = $facilities;
        $facilities = true;
    }

    public function ModerateData(){
        echo 'I can moderate data <br>';
    }

}