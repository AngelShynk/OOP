<?php
/**
 * Created by PhpStorm.
 * User: Angel
 * Date: 31.10.2017
 * Time: 21:16
 */

require_once('User.php');
require_once('Moderator.php');
require_once('JuniorUser.php');

function CheckFacilities($uObject){
    $uName = $uObject->getUsername();
    echo 'My name is '.$uName.'</br>';
    $uObject->ModerateData();
}