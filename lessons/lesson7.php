<?php
$dsn = 'mysql:dbname=skillogram_711;host=127.0.0.1';
$user = 'root';
$password = 'root';

try {
    $dbh = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
    echo 'Подключение не удалось: ' . $e->getMessage();
}
//1
$stmt = $dbh->query('SELECT * FROM post');
var_dump($stmt->fetch(PDO::FETCH_ASSOC)); //1 string fetch()
var_dump($stmt->fetch(PDO::FETCH_ASSOC));
var_dump($stmt->fetch(PDO::FETCH_ASSOC));


if (!is_numeric($_GET['author_id'])) {
    exit('die');            //проверка на число (как  вариант)
}

$stmt = $dbh->query('
    INSERT INTO post
    SET
        author_id = ' . $_GET['author_id'] . ',
        photo = "image.jpg",
        created_at = "' . date('Y-m-d H:i:s') . '"
');



$dbh->beginTransaction();
// а теперь!
////вернет объект запроса, сам запрос не идет

$stmt = $dbh->prepare('
    INSERT INTO post
    SET
        author_id = ?,
        photo = ?,
        created_at = ?,
');

$stmt->execute([
        $_GET['author_id'],
        'image.jpg',
        date('Y-m-d H:i:s'),
]);
//$dbh->commit();
$dbh->rollBack();




//2
$stmt = $dbh->query('SELECT * FROM post ORDER by id DESC '); //DESC в обратном порядке
while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
    var_dump($row);
exit;

/*
if (isset($_POST['submit'])) {
    header('Location: lesson7.php?page=upload'); //редиррект, сброс запроса
    exit;
}

var_dump($_GET);
var_dump($_POST);
*/
?>

<!--
<form enctype="multipart/form-data" method="post">

    <input type="submit" name="submit" value="Click me!">
//ДЛЯ ФАЙЛА
</form>
-->

<form action="?page=upload" enctype="multipart/form-data" method="post">

    <input type="submit" name="submit" value="Click me!">

</form>

<a href="">reset data</a>