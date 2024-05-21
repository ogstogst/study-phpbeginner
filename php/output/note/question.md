# Chapter1
# Chapter2
# Chapter3
# Chapter4
# Chapter5
# Chapter6
# Chapter7
## 01
フォームの利用の説明として誤っているものを選択せよ 2つ
### choices
A. Webサーバとクライアント間で通信は発生せず、Webサーバ内で処理される
B. サブミットされたデータの検証を行うことによって、利用するデータの精度を高めることができる
C. クロスサイトスクリプティング攻撃を防ぐために、time()関数やhtmlentities()関数は有効である
D. フォームを利用するには、<form>タグを使う
E. フォームデータを利用するには、$_GET配列や、$_POST配列を使う

## 02
<form>タグのアクション属性で、フォーム要求の際に使用されたURLと
同じものを指定するための記述として正しいものを選択せよ 1つ
### choices
A. $_GET['PHP_URL']
B. $_POST['PHP_SELF']
C. $_SESSION['PHP_URL']
D. $_SERVER['PHP_SELF']

## 03
Webサーバとクライアント間のリクエストに関する情報を確認します。
クライアントのIPアドレスを確認するためのサーバー変数の要素として正
しいものを選択してください 1つ
### choices
A. REMOTE_POST
B. REMOTE_ADDR
C. REMOTE_HOST
D. REMOTE_USER

## 04
以下のフォームパラメーターからテキストボックスの値を取り
出すための記述として正しいものを選択して　1つ
```php
<form method="GET" action="sample.php">
  <input type="text" name="name">
  <input type="submit" name="submit">
</form>
```
### choices
A. $_POST['name']
B. $_SERVER['text']
C. $_GET['name']
D. $_SESSION['text']

## 05
フォームを利用したWebページでは、フォームパラメーターの値が入力
されなかった際にPHPから警告メッセージが表示されます。警告メッセ
ージが表示されないようにする場合、空欄①に当てはまる記述として
正しいものを選択してください。
```php
<?php print 'ID: ' .$_POST['member_id']① '' ?>
```
### choices
A. ||
B. ;
C. @
D. ??

## 06
複数の値をフォームパラメーターとして渡す場合、空欄①に当てはまる記
述として正しいものを選択してください。
```php
<form method="POST" action="select.php">
<select name="①" multiple>
<option value="red">RED</option>
<option value="blue">BLUE</option>
<option value="yello">YELLO</option>
<option value="green">GREEN</option>
</select>
<input type="submit" name="submit">
</form>
```
### choices
A. color
B. color[]
C. color$
D. $_POST['color']

## 07
フォームパラメーターのidで渡された値の判定をします。以下のコード
における値の判定の説明として正しいものを選択してください。 2つ
```html
// id.html
<form method="POST" action="id.php">
ID:
<input type="text" name="id">
<input type="submit" name="submit">
</form>
```
```php
// id.php
$num = filter_input(
  INPUT_POST,
  'id',
  FILTER_VALIDATE_INT,
  array('options' => array(
    'min_range' => 0,
    'max_range' => 100
  ))
);

if (is_null($num) || ($num === false)) {
  print 'Error!';
} else {
  print 'ID is ' . $num;
}
```
### choices
A. 整数であることを判定できる
B. 浮動少数点であることを判定できる
C. 0(ゼロ)が入力された場合はエラーが表示される
D. 値が入力されていない場合は0が表示される
E. 値が0から100の範囲であることが判定できる
F. パースエラーになる

## 08
サブミットされたデータに値が入力されているか判定します。空欄①に
当てはまる記述として正しいものを選択して 1つ
```php
if(① == 0){
  print 'Error : Please enter your name.';
}else{
  print 'NAME : ' . $_POST['name'];
}
```
### choices
A. strlen(trim($_POST['name']))
B. trim(strlen($_POST['name']))
C. count(trim($_POST['name']))
D. trim(count($_POST['name']))

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
PDOのエラーモードの設定として誤っているものを選択してください。
1つ
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
| id  | name   | place | order |
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
| id  | name   | place | order |
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
| id  | name   | place | order |
| :-: | ------ | ----- | ----- |
|  1  | apple  | 200   | 10    |
|  3  | carrot | 150   | 25    |
B.
| id  | name   | place | order |
| :-: | ------ | ----- | ----- |
|  2  | banana | 300   | 30    |
|  4  | durian | 500   | 5     |
C.
| id  | name   | place |
| :-: | ------ | ----- |
|  1  | apple  | 200   |
|  2  | banana | 300   |
|  4  | durian | 500   |
D.
| id  | name   | place | order |
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

```
### choices
## 11
### choices

# Chapter9
# Chapter10
# Chapter11
# Chapter12
# Chapter13