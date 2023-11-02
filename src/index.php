<?php
$dbh = new PDO(
  'mysql:dbname=twitter;host=mysql;charset=utf8',
  'root',
  'password'
);

$query = "SELECT * FROM tweet";
$stmt = $dbh->query($query);
$tweets = $stmt->fetchAll();
?>

<body>
  <div>
    <h1>簡易Twitter</h1>
    <a href="./create.php">Tweetする</a><br>
    <table border="1">
      <tr>
        <th>投稿者名</th>
        <th>ツイート</th>
        <th>編集</th>
        <th>削除</th>
      </tr>
      <?php foreach ($tweets as $tweet) : ?>
        <tr>
          <td><?php echo $tweet['poster']; ?></td>
          <td><?php echo $tweet['tweet']; ?></td>
          <td><a href="./edit.php?id=<?php echo $tweet['id'] ?>">編集</a></td>
          <td><a href="./delete.php?id=<?php echo $tweet['id'] ?>">削除</a></td>
        </tr>
      <?php endforeach; ?>
    </table>
  </div>
</body>