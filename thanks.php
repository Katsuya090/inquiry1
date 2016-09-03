<?php
// var_dump($_POST);
//   $name = $_POST['name'];
//   $mailadress = $_POST['mailadress'];
//   // $sorts = $_POST[$sort["$sorts"]];
//   $question = $_POST['question'];

  $fileName = "data.csv";

echo 'お問い合わせ<br>';
echo 'お問い合わせありがとうございました。';

// $data = $name . $mailadress . $sorts . $question;


    $fp = fopen($fileName, "a");
    fputcsv($fp, $_POST);
    fclose($fp);

















?>