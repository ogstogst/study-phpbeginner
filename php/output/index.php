<?php

try {
  $db = new PDO(
    'mysql:host=localhost;dbname=testsample',
    'user-id',
    'user-pass'
  );
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $sql = "UPDATE foods SET price = price - 50 where price >= 200";
  $result = $db->exec($sql);

  print "Changed the price of " . $result . "rows";
} catch (PDOException $e) {
  print "Connect error" . $e->getMessage();
}

try {
  $db = new PDO('mysql:host=localhost;dbname-testsample', 'user-id', 'user-pass');

  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $sql = "SELECT name , price , stock FROM fruits ORDER BY stock LIMIT 3";

  $q = $db->query($sql);

  while ($row = $q->fetch()) {
    print "$row[name] \t $row[price] \t $row[stock] \n";
  }
} catch (PDOException $e) {
  print "Connect error" . $e->getMessage();
}

try {
} catch (PDOException $e) {
  print "Connect error" . $e->getMessage();
}
