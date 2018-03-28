<?php
/**
 * Created by PhpStorm.
 * User: php1
 * Date: 3/26/18
 * Time: 9:09 PM
 */
$sUri = $_SERVER['REQUEST_URI'];
$aUri = explode('/', trim($sUri , '/'));
require ('functions.php');

//$sName = '               NAME                ';
//$sName = trim($sName);
//var_dump($_SERVER);
//var_dump($aUri);
//var_dump($sName);

$sController = 'home';

////////////
/*
if (!empty($_GET['page'])) {
    $sController = $_GET['page'];}

else {
    $sController = 'home';
};

$sFileName = './page/' . basename($sController) . '.php';

if (!file_exists($sFileName)){
$sFileName = './page/404.php';
}
$sFileName = getController($_GET['page']);


require ($sFileName);
///////////



if ($aUri[0] === 'skillogram' && empty($_GET)) {
    require ('pages/home.php');
} elseif (isset($_GET['page'])) {
    require ('pages/' . $_GET['page'] . '.php');
}
*/

//$sFileName = getController($_GET['page']);
//require ($sFileName);
/////////////////////////////////////////////////////////////////


//incrementCounterSimple();
incrementCounter();
var_dump(incrementCounter());



