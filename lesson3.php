<?php
//echo "hello world";
//echo date(' Y-m-d H:i:s');

//echo '<br>' . time() . ' 123';
$lastTime = 1;
define('CONSTANT', 84600);

$now = time();

$yesterday = $now - CONSTANT;
//echo '<br>'.date('Y-m-d', $yesterday);

//echo phpinfo();

//echo '<br>';

$lessonChas = date('H:i');
//$lessonMinut = date('i');
//echo $startLesson;
if ($lessonChas < '21:45' && $lessonChas > '19:00') {
echo "Занятие идет";
}
    elseif ($lessonChas > '21:45' && $lessonChas < '22:00') {
        echo "Заканчивается";
    }
    else {
        echo "Занятие не идет";
    }

//require ('lesson1.html');

//echo '<h1 color="#DD0000">hello</h1>';