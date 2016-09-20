<?php
require_once('functions.php');
var_dump($_POST);
  $sort = array(
  1  => "商品について",
  2  => "お支払いについて",
  3 => "当サイトについて",
  4 => "その他",
);


  $name = $_POST['name'];
  $mailaddress = $_POST['mailaddress'];
  $sorts = $_POST["sort"];
  $question = $_POST['question'];



  $dbh = connectDb();

  $sql = "insert into inquiry (name, mailaddress, kind, question, createdAt) values
          (:name, :mailaddress, :kind, :question, now())";

  $stmt = $dbh->prepare($sql);
  $stmt->bindParam(":name", $name);
  $stmt->bindParam(":mailaddress", $mailaddress);
  $stmt->bindParam(":kind", $sorts);
  $stmt->bindParam(":question", $question);

  $stmt->execute();

  echo '成功しました';



?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>完了</title>
<link rel="stylesheet" href="style.css">
</head>
<body>




<p class="inquiry">お問い合わせ</p>
<p>お問い合わせありがとうございました。</p>
</body>
</html>