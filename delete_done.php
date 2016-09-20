<?php


require_once('functions.php');



$id = $_POST['id'];

$dbh = connectDb();

$sql = "DELETE FROM inquiry WHERE id = ?";
$stmt = $dbh->prepare($sql);
$data[] = $id;
$stmt->execute($data);

$dbh = null;


?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>削除完了</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<p>削除しました。</p>



<p><a href="list.php">戻る</a></p>
</body>
</html>