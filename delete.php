<?php
require_once('functions.php');
// var_dump($_POST);



$id = $_POST['id'];

$dbh = connectDb();

$sql = "SELECT * FROM inquiry where id = ?";
$stmt = $dbh->prepare($sql);
$data[] = $id;
$stmt->execute($data);

$row = $stmt->fetchAll(PDO::FETCH_ASSOC);

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

  </tr>
  <?php if(count($row)) : ?>
      <?php foreach ($row as $inquiry) : ?>
        <tr>
          <td><?php echo h($inquiry['name']) ?></td>
          <td><?php echo h($inquiry['mailaddress']) ?></td>
          <td><?php echo h($inquiry['kind']) ?></td>
          <td><?php echo h($inquiry['question']) ?></td>
          <td><?php echo h($inquiry['createdAt']) ?></td>
        </tr>
    </table>
    </div>
        <?php endforeach; ?>
    <?php else: ?>
      現在、投稿されたお問い合わせはありません。
    <?php endif; ?>
    <p>上記のお問い合わせ内容を削除しますか?</p>
    <form action="delete_done.php" method="post">
         <input type="submit" name="botan" value="削除">
          <input type="hidden" name="id" value="<?php echo h($inquiry['id']) ?>">
          </form>



    <p><input type="button" onclick="history.back()" value="戻る"></p>
</body>
</html>