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