<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<title>定数</title>
</head>
<body>
実行中のファイル名：<?= __FILE__ ?><br />
実行中の行番号：<?= __LINE__ ?><br>

実行中のファイル名:&nbsp;<?= __FILE__ ?><br>
実行中の行番号:&nbsp;<?= __LINE__ ?>

<?php
$test = "こんにちは";
echo "<br>";
print($test);
?>
</body>
</html>
