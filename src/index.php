<?php
$dbh = new PDO(
    'mysql:dbname=twitter;host=mysql;charset=utf8',
    'root',
    'password'
);

$query = "SELECT * FROM tweets";
$tweets = $dbh->query($query);
?>

<body>
  <div class="container">
    <h1>簡易Twitter</h1>
    <a href="./create.php">Tweetする</a><br>
    <table border="1">
      <tr>
        <th>投稿者名</th>
        <th>投稿</th>
        <th>作成日時</th>
        <th>編集</th>
        <th>削除</th>
      </tr>
      <?php foreach ($tweets as $tweet) : ?>
        <tr>
          <td><?php echo $tweet['title']; ?></td>
          <td><?php echo $tweet['content']; ?></td>
          <td><?php echo $tweet['created_at']; ?></td>
          <td><a href="./edit.php?id=<?php echo $tweet['id'] ?>">編集</a></td>
          <td><a href="./delete.php?id=<?php echo $tweet['id'] ?>">削除</a></td>
        </tr>
      <?php endforeach; ?>
    </table>
  </div>
</body>