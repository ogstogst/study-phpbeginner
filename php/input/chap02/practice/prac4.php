<?php
const DISCOUNT = 0.9;
$price = 500;
$sum = $price * DISCOUNT;
print "値引き後の価格は{$sum}円です。";

const DISCOUNT_2 = 1;
$price = 500;
$sum = $price * DISCOUNT_2;
echo "<pre>";
print "値引き後の価格は{$sum}円です。";

var_dump((int)0.15536E3);

$fruits = ['りんご', 'かき', 'みかん'];
echo "<pres>";
print_r($fruits);

$vegetables = [
  'red' => 'トマト',
  'yello' => 'かぼちゃ',
  'green' => 'レタス',
];
echo "<pres>";
print_r($vegetables);

$str = <<<EOD
こんにちは、
こんばんは、
おはようございます。
EOD;

echo "<pre>";
print $str;

$num = 0b1_00_11_01;
