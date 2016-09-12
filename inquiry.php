<?php
$sort = array(
  1  => "商品について",
  2  => "お支払いについて",
  3 => "当サイトについて",
  4 => "その他",
);

?>

<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>お問い合わせ</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<p>お問い合わせ</p>
<form action="inquiry_check.php" method="post" id="myform">
<table>
<tr>
<th><label for="user">名前<span class="need">&nbsp;&nbsp;(必須)</span></label></th>
<td><input type="text" id="user" name="name"></td>
</tr>
<tr>
<th><label for="mail">メールアドレス<span class="need">&nbsp;&nbsp;(必須)</span></label></th>
<td><input type="text" id="mail" name="mailaddress"></td>
</tr>
<tr>
<th><label for="sort">種類<span class="need">&nbsp;&nbsp;(必須)</span></label></th>
<td><select name="sort">
          <option value="">選択してください</option>
          <?php
    foreach($sort as $sortkey => $sort) {
      echo ('<option value="' . $sortkey .'">' . $sort .'</option>');
    }
    ?>
</select>
</td>
</tr>
<tr>
<th><label for="com">お問い合わせ内容<span class="need">&nbsp;&nbsp;(必須)</span></label></th>
<td><textarea id="com" name="question" cols="40" rows="8"></textarea></td>
</tr>
</table>
<p><input class="botton2" type="submit" value="確認画面へ" id="submit"></p>
</form>
</body>
</html>