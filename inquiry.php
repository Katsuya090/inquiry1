<?php
$sort = array(
  1  => "商品について",
  2  => "お支払いについて",
  3 => "当サイトについて",
  4 => "その他",
);

?>



<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>お問い合わせ</title>
</head>
<body>




お問い合わせ
<br>
<form method="post" action="inquiry_check.php">
お名前
<br>
<input type="text" name="name" style="width:200px">
<br>
メールアドレス
<br>
<input type="text" name="mailadress" style="width:100px">
<br>
種類
<br>
<select name="sort">
          <option value="sort">選択してください</option>
          <?php
    foreach($sort as $sortkey => $sort) {
      echo ('<option value="' . $sortkey .'">' . $sort .'</option>');
    }
    ?>
</select>
<br>
お問い合わせ内容
<br>
<input type="text" name="question" style="width:100px">
<br>
<br>
<input type="button" onclick="history.back()" value="戻る">
<input type="submit" value="OK">
</form>
</body>
</html>