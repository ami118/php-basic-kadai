<!DOCTYPE html>
<html lang="ja">

<head>
   <meta charset="UTF-8">
   <title>課題011</title>
</head>

<body>
  <p>
  <?php
$personal_data = ['名前' => '玉ねぎ', '値段' => 200, '地産' => '北海道'];
foreach ($personal_data as $key => $value) {
    echo "$key: $value<br>";
}
?>
  </p>
</body>

</html>