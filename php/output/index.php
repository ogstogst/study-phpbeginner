<?php
$file = fopen('foods.txt', 'rb');

for ($line = fgets($file); !feof($file); $lines = fgets($file)) {
  $line = trim($line);
  print "<h1>" . $line . "</h1>";
}

fclose($file);
