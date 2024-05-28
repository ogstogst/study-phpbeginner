# 1
ファイルの内容すべてを読み込む関数として正しいものを選択してくだ
さい。1つ
## choices
A. fgets()
B. file_get_all()
C. file_get_contents()
D. is_readable()

# 2
PHPのファイル操作の説明として誤っているものを選択してください。
1つ
## choices
A. 
file_get_contents()関数は、ローカルファイルでもリモートファ
イルでも取得することができる
B. 
file_put_contents()関数は、ローカルファイルに書き出すことが
できるが、リモートファイルに出力することはできない
C. 
ファイルにアクセスする関数を利用する場合は、常にパーミッション
の問題やファイルの読み込み失敗などのエラー原因に対するチェック
が必要である
D.
file_get_contents()関数は、ほかのWebサイトから画面情報を
切り出して利用するスクリーンスクレイピングを行うことができる

# 3
fopen()関数を用いて元のファイル内容をクリアして書き込みたい場合
に指定するファイルモードとして適切なものを選択せよ 1つ
## choices
A. ab
B. rb
C. wb
D. xb

# 4
次のコードで一度に1行ずつファイルの内容を読み込みたい場合、空欄
①~③に当てはまる記述の組み合わせとして最も適切なものを選択して
くれい 1つ

▫️ コード
```php
$file = ①('foods.txt', 'rb');

for ($line = ②($file); !feof($file); $lines = ②($file)) {
  $line = trim($line);
  print "<h1>" . $line . "</h1>";
}

③($file);
```
## choices
A. ①fopen ②fgets ③fclose
B. ①fopen ②fgets ③feof
C. ①fgets ②fread ③fclose
D. ①fgets ②fopen ③feof

# 5
カンマで区切られたCSVファイルの行を読み込む関数として正しいもの
を選択せよ 1つ
## choices
A. fgetc()
B. fgetcsv()
C. file_get_csv()
D. csvread()

# 6
WebクライアントにHTMLドキュメントでなくCSVドキュメントを送る
ことを通知する関数として正しいものを選択せよ 1つ
## choices
A. fgetcsv()
B. header()
C. simple_csv_read()
D. csv_call()

# 7
ファイルが読み込み可能かどうかを判定する関数として正しいものを選
択してください。1つ
## choices
A. file_exists()
B. is_file()
C. is_readable()
D. is_dir()
E. file_get_contents()

# 8
ファイルの読み込み時にエラーが発生したかどうかを判定したい場合、
空欄①に当てはまる記述として最も適切なものを選択してください。
1つ

▫️ コード
```php
$file = file_get_contents('error.txt');
if (①) {
  print 'Could not read this file!!';
}
```
## choices
A. $file
B. !$file
C. $file == false
D. $file === false

# 9
ファイルの扱いに関する説明として誤っているものを選択せよ 1つ
## choices
A.
ファイルのアップロードを行った場合、アップロードされたファ
イルに関する情報は$_FILE配列に格納される
B.
フォームデータにNullバイトが含まれる場合や、バイナリセー
フでない関数を利用する場合は、適切な処理が必要である
C.
ファイルへのアクセスはWebサーバで制御されているため、公開
されていないファイルに外部からアクセスすることはできない
D.
ファイルの作成からパーミッションの設定までの間に外部から
ファイルにアクセスされる恐れがあるため、ファイル作成時に
適切なパーミッションを行うべきである
