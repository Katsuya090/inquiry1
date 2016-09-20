<?php
require_once('functions.php');

$dbh = connectDb();

$sql = "select * from inquiry";

$stmt = $dbh->prepare($sql);
$stmt->execute();

$row = $stmt->fetchAll(PDO::FETCH_ASSOC);

// var_dump($row);

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>投稿内容</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
  <h1>投稿された内容</h1>
  <div id="table1">
  <table>
  <tr>
    <th>名前</th>
    <th>メールアドレス</th>
    <th>種類</th>
    <th>お問い合わせ内容</th>
    <th>投稿された時刻</th>
    <th></th>
  </tr>
  <?php if(count($row)) : ?>
      <?php foreach ($row as $inquiry) : ?>
        <tr>
          <td><?php echo h($inquiry['name']) ?></td>
          <td><?php echo h($inquiry['mailaddress']) ?></td>
          <td><?php echo h($inquiry['kind']) ?></td>
          <td><?php echo h($inquiry['question']) ?></td>
          <td><?php echo h($inquiry['createdAt']) ?></td>
          <form action="delete.php" method="post">
          <td><input type="submit" name="botan" value="削除"></td>
          <input type="hidden" name="id" value="<?php echo h($inquiry['id']) ?>">
          </form>
        </tr>
    <?php endforeach; ?>
    <?php else: ?>
      現在、投稿されたお問い合わせはありません。
    <?php endif; ?>
    </table>
    </div>
    <p><a href="inquiry.php">戻る</a></p>
</body>
</html>