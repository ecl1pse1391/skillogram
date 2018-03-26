<?php
/**
 * Created by PhpStorm.
 * User: php1
 * Date: 3/26/18
 * Time: 9:09 PM
 */
$sUri = $_SERVER['REQUEST_URI'];
$aUri = explode('/', trim($sUri , '/'));


$sName = '               NAME                ';
$sName = trim($sName);
//var_dump($_SERVER);
var_dump($aUri);
var_dump($sName);



if ($aUri[0] === 'skillogram' && empty($_GET)) {
    require ('pages/home.php');
} elseif (isset($_GET['page'])) {
    require ('pages/' . $_GET['page'] . '.php');
}

