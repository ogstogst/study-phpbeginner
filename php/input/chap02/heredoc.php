<?php
$str = 'PHP（PHP:Hypertext Preprocessor）';
$msg = <<<EOD
{$str}は、サーバーサイドで動作する簡易なスクリプト言語です。
まずは、本書でじっくり基礎固めしましょう。<br />
"Let's start, everyone!!"
EOD;
print $msg;

$str_2 = 'PHP（PHP:Hypertext Preprocessor）';
$mst_2 = <<<TEXT
{$str_2}は、サーバーサイドで動作する簡易なスクリプト言語です。
まずは、本書でじっくり基礎固めしましょう。<br>
"Let's start, everyone!!"
TEXT;
echo "<br>";
print($mst_2);