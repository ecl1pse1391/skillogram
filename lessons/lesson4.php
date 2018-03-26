<?php

$iAge = 18;
$iPrice = 5.5;
$bIsAdmin = true;
$sName = 'Artem';
$nNull = null;
$aHashTags = [
    'cat' => 'https://google.com',
    'neon' => 'https://yandex.ru',
    'color' => 'https://rambler.ru',
    'great' => 'about.php',
    /*[
        0,
        1,
        2,
    ],*/
];
//echo $aHashTags;
$aUser1 = [
    'name' => $sName,
    'city' => 'spb',
    'age' => $iAge,
];
$aUser = [
    'info_common' => [
        'name' => 'Paul',
        'city' => 'spb',
        'age' => '26',
    ],
    'info_work' => [
        'name' => 'Kate',
        'city' => 'SPB',
        'age' => '27',
    ],
    'city' => 'msk',
];
//echo $aUser['city'] . '<br>';

foreach ($aUser as $sKey => $aInfo) {
    echo $sKey . '<br>';
    if (is_string($aInfo)) {
        continue;
    }
    foreach ($aInfo as $sInfoKey => $sInfo) {
        echo '----' . $sInfoKey . ' ' . $sInfo . '<br>';
        //echo '----' . $sInfo . '<br>';
        if (!empty($aUser[$sInfoKey])) {
            echo '<br' . $aUser[$sInfoKey] . '<br>';
        }
    }
}
$aYear = [];
for ($i = 2000; $i <= date('Y'); $i++) {
    $aYear[] = $i . '<br>';
    echo $aYear[$i-2000];
}
//var_dump($aYear);
/*echo '<pre>';
print_r($aHashTags);
echo '<br>';
echo $aHashTags[3] . '<br>' . $aExample['city'] . '<br>';
echo count($aHashTags) . '<br>';
var_dump(array_keys($aExample));
var_dump($nNull);
if ($iAge === '18') {                   // 3 равно по типу данных
    echo '<br>' . 'true';
}
elseif ($bIsAdmin == 1) {
    echo '<br>' . 'admin';
}
//unset($aHashTags['cat']);
foreach ($aHashTags as $sHashTag => $sLink) {
    echo '<a href=" '. $sLink . ' ">' . $sHashTag . '</a> ' . '<br>';
}
//unset($aHashTags);
//var_dump($aHashTags);
$aExample = [
    'key1' => 'val1',
    'key2' => 'val2',
    'key3' => 'val3',
    'key4' => 'val4',
];
//var_dump($aExample);
foreach ($aExample as $sKey => $sValue) {
    echo 'key: ' . $sKey . ' & value: ' . $sValue . '<br>';
}
?>
<div class="hashtag_wrapper">
    <?php foreach ($aHashTags as $sHashTag => $sLink): ?>
        <a href="<?php echo $sLink; ?>"><?php echo $sHashTag; ?></a>
    <?php endforeach; ?>
    </div>
*/