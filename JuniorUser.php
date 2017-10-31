<?php
/**
 * Created by PhpStorm.
 * User: Angel
 * Date: 31.10.2017
 * Time: 21:03
 */

class JuniorUser extends User
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
        $facilities = false;
    }

    public function ModerateData(){
        echo 'I can`t moderate data <br>';
    }
}