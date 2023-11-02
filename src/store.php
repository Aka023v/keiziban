<?php
$poster = filter_input(INPUT_POST, 'poster');
$tweet = filter_input(INPUT_POST, 'tweet');

$dbh = new PDO(
    'mysql:dbname=twitter;host=mysql;charset=utf8',
    'root',
    'password'
);

$query = "INSERT INTO `tweet` (`poster`, `tweet`) VALUES ('$poster', '$tweet')";
$dbh->query($query);
header("Location: ./index.php");
?>