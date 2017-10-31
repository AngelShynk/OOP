<?php
/**
 * Created by PhpStorm.
 * User: Angel
 * Date: 31.10.2017
 * Time: 19:54
 */

class User
{
protected $username;
protected $facilities;
protected $structure;

public function GetData(){
    echo 'I can get data from this resource<br>';
}

public function ModerateData(){

}

public function InviteUsers(){

}
public   function __construct($username, $facilities, $structure){
    $this->username = $username;
    $this->structure = $structure;
    $this->facilities = $facilities;

}

public function __destruct()
{
    // TODO: Implement __destruct() method.
}
}