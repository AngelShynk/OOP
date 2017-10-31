<?php
/**
 * Created by PhpStorm.
 * User: Angel
 * Date: 31.10.2017
 * Time: 21:07
 */
require_once('User.php');
require_once('Moderator.php');
require_once('JuniorUser.php');
require_once ('functions.php');

$Moderator1 = new Moderator('JohnSnow',true,'WinterFall');

$JUser1 = new JuniorUser('FrodoBeggins',false,'Shire');


CheckFacilities($JUser1);
CheckFacilities($Moderator1);
