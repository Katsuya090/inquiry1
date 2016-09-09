<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>お問い合わせ</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<?php
  error_reporting(E_ALL & ~E_NOTICE);
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

  $name = htmlspecialchars($name);
  $mailaddress = htmlspecialchars($mailaddress);
  $question = htmlspecialchars($question);


if ($name =='')
{
  $err1 = 'お名前が入力されていません。';
}
else
{
  $name;

}

if ($mailaddress == ''){
  $err2 = 'メールアドレスが入力されていません。';
}
else {
  $mailaddress;
}
if (count($sort["$sorts"]) == ''){
  $err3 = '種類が入力されていません。';
}
else {
  $sort["$sorts"];
}

if ($question == '') {
  $err4 = 'お問い合わせが入力されていません。';
}
else {
  $question;
}
?>
<?php if ($name == '' || $mailaddress == '' || $sort == '' || $question == ''): ?>
<p>お問い合わせ</p>
<form action="inquiry_check.php" method="post" id="myform">
<table>
<tr>
<th><label for="user">名前<span class="need">&nbsp;&nbsp;(必須)</span></label></th>
<td>
  <input type="text" id="user" name="name" value="<?php echo $name ?>">
  <p class="err"><?php echo $err1; ?></p>
</td>
</tr>
<tr>
<th><label for="mail">メールアドレス<span class="need">&nbsp;&nbsp;(必須)</span></label></th>
<td>
  <input type="text" id="mail" name="mailaddress" value="<?php echo $mailaddress ?>">
  <p class="err"><?php echo $err2; ?></p>
</td>
</tr>
<tr>
<th><label for="sort">種類<span class="need">&nbsp;&nbsp;(必須)</span></label></th>
<td><select name="sort">
          <option value="sort">選択してください</option>
          <?php
    foreach($sort as $sortkey => $sort) {
      echo ('<option value="' . $sortkey .'">' . $sort .'</option>');
    }
    ?>
</select>
<p class="err"><?php echo $err3; ?></p>
</td>
</tr>
<tr>
<th><label for="com">お問い合わせ内容<span class="need">&nbsp;&nbsp;(必須)</span></label></th>
<td>
  <textarea id="com" name="question" cols="40" rows="8" value="<?php echo $question ?>"></textarea>
  <p class="err"><?php echo $err4; ?></p>
</td>
</tr>
</table>
<p>
  <input class="botton1" type="submit" onclick="history.back()" value="戻る">
</p>
</form>

<?php else: ?>


<p>お問い合わせ</p>
<form action="thanks.php" method="post" id="myform">
<table>
<tr>
<th><label for="user">名前</label></th>
<td><?php echo $name ?></td>
</tr>
<tr>
<th><label for="mail">メールアドレス</label></th>
<td><?php echo $mailaddress ?></td>
</tr>
<tr>
<th><label for="sort">種類</label></th>
<td><?php echo $sort["$sorts"] ?></td>
</tr>
<tr>
<th><label for="com">お問い合わせ内容</label></th>
<td><?php echo $question ?></td>
</tr>
</table>
<form method="post" action="thanks.php">';
    <input name="name" type="hidden" value="<?php echo $name ?>">
    <input name="mailadress" type="hidden" value="<?php echo $mailaddress ?>">
    <input name="sort" type="hidden" value="<?php echo $sort["$sorts"] ?>">
    <input name="question" type="hidden" value="<?php echo $question ?>">
<p>
  <input class="botton1" type="submit" onclick="history.back()" value="戻る">
  <input class="botton2" type="submit" value="送信する">
</p>
</form>
<?php endif ?>
</body>
</html>