<?php


function getCounter () {
    $sCountName = 'counter.txt';
    //$aData = [];
    // 1.Проверить наличие файла.
    if (file_exists($sCountName)) {
        //      а. если нет, то счетчик 0
        $sData = file_get_contents($sCountName);
    }
    else {
        //      b. если есть, взять из файла
        $sData = '';
    }
    return explode("\t" , $sData);
}

function getController ($sRequestedPage) {
    if (!empty($sRequestedPage)) {
        $sController = $sRequestedPage;}

    else {
        $sController = 'home';
    };

    $sFileName = './pages/' . basename($sController) . '.php';

    if (!file_exists($sFileName)) {
        $sFileName = './pages/404.php';
    }
    return $sFileName;
}

function incrementCounterSimple () {
    $iCounter = 0;

    $sCountName = 'counterSimple.txt';
// 1.Проверить наличие файла. Если нет, счетчик 0
//      а. если нет, то счетчик 0
//      b. если есть, взять из файла

    if (file_exists($sCountName)) {
        $iCounter = file_get_contents($sCountName);
    }
    else {
        $iCounter = 0;
    }
// 2.увеличить счетчик
    $iCounter ++;
// 3. переписать данные счетчика

    file_put_contents($sCountName , $iCounter);
    echo $iCounter;
// Должно выводиться кол-во просмотров и дату последнего визита
}

function incrementCounter () {
    //$iCounter = 0;

    $sCountName = 'counter.txt'; /*
    //$aData = [];
    // 1.Проверить наличие файла.
    if (file_exists($sCountName)) {
        //      а. если нет, то счетчик 0
        $sData = file_get_contents($sCountName);
    }
    else {
        //      b. если есть, взять из файла
        $sData = '';
    }
    $aData = explode("\t" , $sData);*/
    $aData = getCounter();

    // 2.увеличить счетчик

    $aData[0]++;
    $aData[1] = date('Y-m-d H:i:s');
    $aData[2] = $_SERVER['REMOTE_ADDR'];

    $sData = implode($sCountName , $aData);
// 3. переписать данные счетчика

    file_put_contents($sCountName , $aData);
    //echo $iCounter;
return $aData;
// Должно выводиться кол-во просмотров и дату последнего визита
}

