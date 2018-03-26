<?php
/**
 * Created by PhpStorm.
 * User: php1
 * Date: 3/26/18
 * Time: 8:01 PM
 *
$sHashTags = 'neon, aerial, grid';
//$sHashTags = explode(',' , $sHashTags);
$sHashTags2 = implode([', '], $sHashTags);

var_dump($sHashTags);
var_dump($sHashTags2);
//$iIndex = 1;
$iIndex= strpos($sHashTags, 'aerial');
$sSub = substr($sHashTags, 6);
$sTest = 'test';
//var_dump($GLOBALS);

*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>

    <link rel="stylesheet" href="../style.css">
</head>
<body>

<div class="header">
    Skillogram

    <form method="get">
        <input type="text"
               name="coach"
               value="<?php echo $_GET['coach'];?>">
        <input type="submit">
    </form>
    <?php
        var_dump($_GET);
    ?>
</div>


<div class="posts-list">
    <div class="post">
        <img src="../images/post.png">
    </div>
    <div class="post">
        <img src="../images/post.png">
    </div>
    <div class="post">
        <img src="../images/post.png">
    </div>
    <div class="post">
        <img src="../images/post.png">
    </div>
    <div class="post">
        <img src="../images/post.png">
    </div>
    <div class="post">
        <img src="../images/post.png">
    </div>
</div>
<div class="clear"></div>

<div id="test">TEST</div>


<!--<img src="/images/logo.png">-->


<div class="hashtag_wrapper">
    <a href="#">Neon</a>
    <a href="#">Aerial</a>
    <a href="#">Grid</a>
</div>




</body>
</html>
