# Chapter8
## 01
リレーショナルデータベース（RDB）の説明として正しいものを選択し
てください 2つ
### choices
A. SQLキーワードでは大文字と小文字を区別する
B. データベース製品が異なってもSQLの記述方法は同じである
C. データベースにアクセス後、SQLでは、INSERT文、UPDATE文、
  DELETE文、SELECT文を利用できる
D. 値のないフィールドがあっても表を作成することができる
E. スプレッドシートのようにデータベーステーブルの行の順番は
  決められている

## 02
PDOの説明として誤っているものを選択して 1つ
### choices
A. PHPの拡張モジュールとして実装されている
B. DBMSに対して共通のインターフェースを提供するため、移植
  性が高い
C. PDOを利用した場合でも、データベース特有の機能の中にはデー
  タベース独自の関数でしかアクセスできないものがある
D. プレースホールダーを用いたプリペアドステートメントをサポート
  していない

## 03
PDOによるデータベース接続を行う場合の記述として正しいものを選
択して。ただし、$DSN変数には適切なDSN接続文字列が代入されて
いるものとする。
### choices
A. $db = pdo_connect($DSN);
B. $db = new PDO($DSN, 'user-id' , 'user-pass');
C. $db = PDO::connect($DSN, 'user-id' , 'user-pass');
D. $db = connect($DSN);

## 04
PDOのエラーモードの設定として誤っているものを選択してください。1つ
### choices
A. PDOには例外、サイレント、警告の3つのエラーモードがある
B. デフォルトは警告モードである
C. 次のメソッド呼び出しを行うと例外モードを設定できる
  setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
D. 次のメソッドを呼び出すと警告モードを設定できる
  setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

## 05
次のemployeesテーブルに新たな行を追加するSQL文として正しいもの
を選択してくれ 1つ
▫️ employeesテーブル
| id  | name      |
| :-: | --------- |
|  1  | Tanaka    |
|  2  | Yamada    |
|  3  | Takahashi |
|  4  | Saito     |

### choices
A. INSERT INTO employees VALUES(5, 'Yamada');
B. INSERT INTO employees SET(5, 'Ito');
C. ADD employees VALUES(5, 'Ito');
D. ADD employees SET(5, 'Ito');

## 06
foodsテーブルに対して以下のコードを実行したときの出力結果として
正しいものを選択して 1つ

▫️ foodsテーブル 
| id  | name   | price | order |
| :-: | ------ | ----- | ----- |
|  1  | apple  | 200   | 10    |
|  2  | banana | 300   | 30    |
|  3  | carrot | 150   | 25    |
|  4  | durian | 500   | 5     |

▫️ 実行したコード
```php
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
```
### choices
A. Changed the price of 1 rows
B. Changed the price of 2 rows
C. Changed the price of 3 rows
D. Changed the price of 4 rows

## 07
foodsテーブルに対して以下のSQL文を実行したとき、実行後のfoods
テーブルの状況として正しいものを選択してくれい 1つ

▫️ foodsテーブル
| id  | name   | price | order |
| :-: | ------ | ----- | ----- |
|  1  | apple  | 200   | 10    |
|  2  | banana | 300   | 30    |
|  3  | carrot | 150   | 25    |
|  4  | durian | 500   | 5     |

▫️ sql文
```php
DELETE FROM foods WHERE price < 200;
```
### choices
A.
| id  | name   | price | order |
| :-: | ------ | ----- | ----- |
|  1  | apple  | 200   | 10    |
|  3  | carrot | 150   | 25    |
B.
| id  | name   | price | order |
| :-: | ------ | ----- | ----- |
|  2  | banana | 300   | 30    |
|  4  | durian | 500   | 5     |
C.
| id  | name   | price |
| :-: | ------ | ----- |
|  1  | apple  | 200   |
|  2  | banana | 300   |
|  4  | durian | 500   |
D.
| id  | name   | price | order |
| :-: | ------ | ----- | ----- |
|  1  | apple  | 200   | 10    |
|  2  | banana | 300   | 30    |
|  4  | durian | 500   | 5     |

## 08
fruitsテーブルに対して以下のSQL文を実行したときの出力結果として
正しいものを選択してください。1つ

▫️ fruitsテーブル
| id  | name  | price | stock |
| :-: | ----- | ----- | ----- |
|  1  | plum  | 240   | 40    |
|  2  | kiwi  | 120   | 80    |
|  3  | lemon | 180   | 50    |
|  4  | melon | 360   | 30    |

▫️ SQL文
```php
SELECT name , price , stock FROM fruits ORDER BY price;
```
### choices
A.
| name  | price | stock |
| ----- | ----- | ----- |
| kiwi  | 120   | 80    |
| lemon | 180   | 50    |
| melon | 360   | 30    |
| plum  | 240   | 40    |
B.
| name  | price | stock |
| ----- | ----- | ----- |
| melon | 360   | 30    |
| plum  | 240   | 40    |
| lemon | 180   | 50    |
| kiwi  | 120   | 80    |
C.
| name  | price | stock |
| ----- | ----- | ----- |
| kiwi  | 120   | 80    |
| lemon | 180   | 50    |
| plum  | 240   | 40    |
| melon | 360   | 30    |
D.
| name  | price | stock |
| ----- | ----- | ----- |
| plum  | 360   | 40    |
| kiwi  | 240   | 80    |
| lemon | 180   | 50    |
| melon | 120   | 30    |

## 09
次のコードを実行したときの出力結果として正しいものを選択してくだ
さい。1つ

▫️ 実行したコード
```php
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
```

▫️ fruitsテーブル
| id  | name  | price | stock |
| :-: | ----- | ----- | ----- |
|  1  | plum  | 240   | 40    |
|  2  | kiwi  | 120   | 80    |
|  3  | lemon | 180   | 50    |
|  4  | melon | 360   | 30    |
### choices
A.
lemon 180 50

B.
kiwi 120 80
lemon 180 50
plum 240 40
melon 360 30

C.
melon 360 30
plum 240 40
lemon 180 50

D.
lemon 180 50
plum 240 40
melon 360 30

## 10
次のコードを実行したときに以下の結果が得られるようにしたい場合、
空欄①に当てはまる記述として正しいものを選択せよ 1つ

▫️ 実行したコード
```php
try {
  $db = new PDO('mysql:host=localhost;dbname=testsample', 'user-id', 'user-pass');

  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $sql = "SELECT id , name FROM employees";
  $q = $db->query($sql);

  $row = $q->①(); // ①!!

  foreach ($row as $row) {
    print "$row[0] $row[1] \n";
  }
} catch (PDOException $e) {
  print "Connect error" . $e->getMessage();
}
```

▫️ employeesテーブル
| id  | name      |
| :-: | --------- |
|  1  | Tanaka    |
|  2  | Yamada    |
|  3  | Takahashi |
|  4  | Saito     |

▫️ 実行結果
1 Tanaka
2 Yamada
3 Takahashi
4 Saito
### choices
A. getAll
B. get
C. fetchAll
D. fetch

## 11
次のコードでは、PDOのプリペアドステートメントを使用して、外部か
らのデータを用いた検索を行っている。空欄①、②に当てはまる記述
の組み合わせとして正しいものを選択せよ 1つ

▫️ 実行したコード
```php
try {
  $db = new PDO('mysql:host=localhost;dbname=testsample', 'user-id', 'user-pass');

  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

  $sql = "SELECT name, price FROM foods WHERE price >= ? AND price <= ?";

  $q = $db->①($sql);
  $q->②(array($_POST['min_price'], $_POST['max_price']));

  $foods = $q->fetchAll();

  if (count($foods) == 0) {
    print "No food matched";
  } else {
    foreach ($foods as $row) {
      print_r($row);
    }
  }
} catch (PDOException $e) {
  print "Connect error" . $e->getMessage();
}
```
### choices
A. ①bind ②exec
B. ①bind ②execute
C. ①query ②exec
D. ①query ③execute
E. ①prepare ②exec
F. ①prepare ②execute