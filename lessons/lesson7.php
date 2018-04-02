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