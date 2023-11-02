<?php
$id = filter_input(INPUT_GET, 'id');

$dbh = new PDO(
  'mysql:dbname=twitter;host=mysql;charset=utf8',
  'root',
  'password'
);
$query = "SELECT * FROM tweet where id = '$id'";
$stmt = $dbh->query($query);
$tweet = $stmt->fetch();
?>

<body>
  <div>
    <h1>編集</h1>
    <form method="post" action="./update.php">
      <input type="hidden" name="id" value=<?php echo $tweet['id'] ?>>
      <div>
        <label for="poster">投稿者名
          <input type="text" name="poster" value=<?php echo $tweet['poster'] ?>>
        </label>
      </div>
      <div>
        <label for="tweet">ツイート
          <input type="textarea" name="tweet" value=<?php echo $tweet['tweet'] ?>>
        </label>
      </div>
      <button>更新</button>
    </form>
  </div>
</body>