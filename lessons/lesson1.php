<?php
/**
 * Created by PhpStorm.
 * User: php1
 * Date: 3/26/18
 * Time: 7:23 PM
 */?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>

    <link rel="stylesheet" href="../style.css">
</head>
<body>

    <div class="logo">
Skillogram
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

    <!--<img src="/images/logo.png">-->

    <?php
        $sHashTags = 'neon, aerial, grid';
        $sHashTags = explode(',' , $sHashTags);
        $sHashTags2 = implode(', ',$sHashTags);

        var_dump($sHashTags);
        var_dump($sHashTags2);
$iIndex = 1;
        $sHashTag = strpos();
        $sSubtr = substr($sHashTags, SiIndex, 6);

        var_dump($sHashTag);
    ?>
    <div class="hashtag_wrapper">
        <?php foreach ($sHashTags as $sHashTag) : ?>
        <a href="#"> <?php echo $sHashTag .  '!' ?>   </a>
        <?php endforeach ?>
    </div>


    <hr/>  <!-- Horizontal Row (линия) -->
    <br />   BReak (перенос строки)
    <img src="https://c1.staticflickвфвфr.com/6/5211/5513402618_3ce232e01a_n.jpуg"
         alt="Если не удалось загрузить" /> Картинка
    <br/><br/><br/><br/><br/><br/>
    <input type="submit" /><br/>
    Поле ввода / Кнопка

<span class="">
        <b>
Bold
            <i>Italic</i>
            <u>Underline</u>
        </b>
    </span>

    <div>
        <a href="http://yandex.ru"
           target="_blank">Ссылка на <span>Яндекс</span></a>
    </div>

</body>
</html>