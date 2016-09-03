<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>確認画面</title>
</head>
<body>
<?php
  $sort = array(
  1  => "商品について",
  2  => "お支払いについて",
  3 => "当サイトについて",
  4 => "その他",
);



  // var_dump($_POST);
  $name = $_POST['name'];
  $mailadress = $_POST['mailadress'];
  $sorts = $_POST["sort"];
  $question = $_POST['question'];

  $name = htmlspecialchars($name);
  $mailadress = htmlspecialchars($mailadress);
  $question = htmlspecialchars($question);

if ($name =='')
{
  echo 'お名前が入力されていません。' . '<br>';
}
else
{
  echo 'お名前' . $name . '様' . '<br>';

}

if ($mailadress == ''){
  echo 'メールアドレスが入力されていません。' . '<br>';
}
else {
  echo 'メールアドレス' . $mailadress . '<br>';
}
if ($sort == ''){
  echo '種類が入力されていません。' . '<br>';
}
else {
  echo '種類' . $sort["$sorts"] . '<br>';
}

if ($question == '') {
  echo 'お問い合わせが入力されていません。' . '<br>';
}
else {
  echo   $question . '<br>';
}

if($name == '' || $mailadress == '' || $sort == '' || $question == '')
{
    echo '<form>';
    echo '<input type="button" onclick="history.back()" value="戻る">';
    echo '</form>';
}



else
{
    echo '<form method="post" action="thanks.php">';
    echo '<input name="name" type="hidden" value="'.$name.'">';
    echo '<input name="mailadress" type="hidden" value="'.$mailadress.'">';
    echo '<input name="sort" type="hidden" value="'.$sort["$sorts"].'">';
    echo '<input name="question" type="hidden" value="'.$question.'">';
    echo '<input type="submit" value="OK">';
    echo '<input type="button" onclick="history.back()" value="戻る">';
    echo '</form>';
}
?>
</body>
</html>