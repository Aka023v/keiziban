<?php
$id = filter_input(INPUT_POST, 'id');
$poster = filter_input(INPUT_POST, 'poster');
$tweet = filter_input(INPUT_POST, 'tweet');

$dbh = new PDO(
  'mysql:dbname=twitter;host=mysql;charset=utf8',
  'root',
  'password'
);
$query = "UPDATE tweet SET poster='$poster', tweet='$tweet' WHERE id = '$id'";
$dbh->query($query);

header('Location: ./index.php');
exit;
?>