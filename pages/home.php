<?php
/**
 * Created by PhpStorm.
 * User: php1
 * Date: 3/26/18
 * Time: 9:11 PM
 */

require('header.php');
$sSearch = isset($_GET['search']) ? $_GET['search'] : '';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>

    <link rel="stylesheet" href="/skillogram/style.css">
</head>
<body>

<div class="header">
    Skillogram

    <form method="get">
        <input type="text"
               name="search"
               value="<?php echo $sSearch; ?>">
        <input type="submit">
    </form>
    <?php
    var_dump($_GET);
    ?>
</div>


<div class="posts-list">
    <div class="post">
        <img src="/skillogram/images/post.png">
    </div>
    <div class="post">
        <img src="/skillogram/images/post.png">
    </div>
    <div class="post">
        <img src="/skillogram/images/post.png">
    </div>
    <div class="post">
        <img src="/skillogram/images/post.png">
    </div>
    <div class="post">
        <img src="/skillogram/images/post.png">
    </div>
    <div class="post">
        <img src="/skillogram/images/post.png">
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
