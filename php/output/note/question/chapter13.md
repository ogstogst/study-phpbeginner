# 1. 
タイムゾーンに関する説明として誤っているものを選択してください。
1つ
## 1.1. choices
A.
タイムゾーンを設定する際は、PHPの構成ファイルのdate.timezone
構成パラメータを設定する

B.
スクリプト内でdate_default_timezone_set()関数によってタイ
ムゾーンを設定する

C.
タイムゾーンの設定をしないデフォルト値はJSTに設定されている

D.
PHPでは、サポートされているタイムゾーンのみ設定することができ
る

# 2. 
2019年2月1日金曜日を「02/01/19」と表示したい場合、以下の記述の
空欄①に当てはまるものを選択してください 1つ

```php
$now = new DateTime();
print $now->format('①');
```
## 2.1. choices
A. n/j/Y
B. m/d/y
C. g:i:s
D. M:D:Y

# 3. 
時刻に関するDateTimeオブジェクトのメソッドについて、メソッド名と
説明の組み合わせとして誤っているものを選択せよ 1つ
## 3.1. choices
A.
format()メソッド : 指定した書式でフォーマットした日付と時刻を返
す

B.
modify()メソッド : DateTimeオブジェクト内の日付や時刻を変更す
る

C.
diff()メソッド : 2つのDateTimeオブジェクトの差を返す

D.
setDate()メソッド : DateTimeオブジェクトの現在時刻を別の時刻
に設定する

# 4. 
Composerの説明として正しいものを選択してください。2つ
## 4.1. choices
A.
Composerは既存のライブラリを探し、プログラムに統合することができる

B.
Composerを利用するには専用の有料ライセンスが必要である

C.
Composerでは、使用中のパッケージの新バージョンに対して寛容にアップグレードが行われる

D.
ComposerはWindowsでは使用できない

# 5. 
Composerでインストールしたバッケージを利用するための記述として正しいものを選択せよ 1つ
## 5.1. choices
A. use 'vendor/autoload.php';
B. add 'vendor/autoload.php';
C. compose 'vendor/autoload.php';
D. require 'vendor/autoload.php';

# 6. 
Composerパッケージリポジトリとして正しいものを選択してください 1つ
## 6.1. choices
A. WebRepo
B. PHPPakager
C. Packgist
D. ComposerRepo

# 7. 
Swift Mailerを使用してメールの送信をします。メールメッセージの作成についての説明として正しいものを
選択せよ 1つ
## 7.1. choices
A.
Swift Mailerでは、メッセージをSwift_Mailerオブジェクトとして作成する

B.
メッセージの件名を設定する際には、Subject()メソッドの引数に設定する

C.
メッセージの本文を設定する際には、setBody()メソッドの引数に設定する

D.
HTML形式でメッセージを送信したい場合には、addHTML()メソッドの引数に、メッセージとタイプを指定する

# 8. 
Swift Mailerを使用してメールの送信をします。メールを送信するためにSMTPトランスポートの作成および、その
トランスポートを使用するメーラーの設定を行います。以下の空欄①、②に当てはまる記述の組み合わせとして正しい
ものを選択せよ 1つ

```php
$transport = ①::newInstance('mailsv.livedoor.com', 25);
$mailer = ②::newInstance($transport);
```
## 8.1. choices
A. ① : Swift_SmtpTransport  ② : Swift_Mailer
B. ① : Swift_SmtpTransport  ② : Swift_Sender
C. ① : Swift_Sport  ② : Swift_Sender
D. ① : Swift_Sport  ② : Swift_Mailer

# 9. 
Swift Mailerを使用してメールを送信します。メールを送信するために利用するSwift_Mailerオブジェクトの
メソッドとして正しいものを選択してください 1つ
## 9.1. choices
A. setForm()メソッド
B. setTo()メソッド
C. attach()メソッド
D. send()メソッド

# 10. 
一般的に、Web開発を目的としたフレームワークで提供される機能として誤っているものを選択せよ 1つ
## 10.1. choices
A. ルーティング
B. オブジェクト関係マッピング
C. 脆弱性のないプログラムの作成
D. ユーザ管理

# 11. 
PHPのLaravelフレームワークの説明として誤っているものを選択してください。
## 11.1. choices
A. オープンソースのフレームワークである
B. Composerをパッケージの管理に使用している
C. ルーティングをサポートする
D. LaraHandlerテンプレートエンジンをサポートする

# 12. 
PHPのSymfonyフレームワークの特徴として正しいものを選択せよ
## 12.1. choices
A. 使用には有償のライセンスが必要である
B. ルーティングの設定ファイルでは、XML、PHP、Annotationsのみが利用できる
C. Linux専用のフレームワークである
D. Twigテンプレートエンジンをサポートする

# 13. 
PHPのZend Frameworkフレームワークの特徴として正しいものを選択せよ 1つ
## 13.1. choices
A. 使用には有償のライセンスが必要である
B. Windows専用のフレームワークである
C. 標準のルータはZend_Controller_Router_Rewriteである
D. デフォルトのテンプレートエンジンはVelocityである

# 14. 
PHPのエンジンの組み込みWebサーバを使用します。ホスト名がwww.example.comのマシンのサポート8000番でWeb
サーバを稼働させる際のコマンドラインとして正しいものを選択してください 1つ
## 14.1. choices
A. php www.example.com 8000
B. php -m www.example.com -p 8000
C. php -h www.example.com, 8000
D. php -S www.example.com: 8000

# 15. 
PHPエンジンの組み込みWebサーバを使用します。Webサーバで参照するスクリプトファイルが「/home/taro/html」
以下にあります。Webサーバ開始時にドキュメントルートを「/home/taro/html」に設定するための方法として正し
ものを選択して　2つ
## 15.1. choices
A.
Webサーバ開始時に、phpコマンドの-dオプションを指定し、引数に設定したいドキュメントルートのディレクトリ名
を指定する

B.
Webサーバ開始時に、phpコマンドの-tオプションを指定し、引数に設定したいドキュメントルートのパス名を指定す
る

C.
事前にWebサーバの設定ファイルにURLに対するファイルのマッピングを設定しておく

D.
Webサーバ開始前に、phpコマンドを実行するディレクトリを「/home/taro/html」に変更しておく

E.
組み込みWebサーバでは、ドキュメントルートのディレクトリは固定のため、任意のディレクトリをドキュメントルート
に設定することはできない

# 16. 
組み込みのPHP REPLを利用して対話的にPHPコードを実行します。組み込みのPHP REPLを開始するコマンドとして
正しいものを選択してください 1つ
## 16.1. choices
A. php -a
B. php -i
C. php -p
D. php start repl

# 17. 
PHPでの日本語処理についての説明として正しいものを選択してください 1つ
## 17.1. choices
A. PHPでは日本語などのマルチバイト文字を扱うことができない
B. mbstring拡張モジュールは、自動翻訳の機能を提供する
C. mbstring拡張モジュールは、日本語などのマルチバイト対応の文字列処理関数を提供する
D. PHPは、標準でShift-JISエンコーディングによるテキスト処理をサポートする

# 18. 
次のコードを実行した結果として正しいものを選択して 1つ

```php
$message = "PHPプログラム";
print mb_substr($message, 2, 5);
```
## 18.1. choices
A. PHPプロ
B. Pプロ
C. HPプログ
D. Pプログラ

# 19. 
次のコードを実行したときに以下の出力結果を得られるようにしたい場合、空欄①に当てはまる記述として正しいもの
1つ

```php
$message = "PHPプログラミング";

print mb_detect_encoding($message) . "\n";
print ①($message);
```

```出力結果
UTF-8
10
```
## 19.1. choices
A. mb_strlen($message);
B. strlen($message);
C. strlen($message, "UTF-8");
D. convert_strlen($message, "UTF-8");

# 20. 
異なる文字エンコーディング間で相互変換を行う関数として正しいものを選択せよ 1つ
## 20.1. choices
A. mb_internal_encoding()
B. mb_convert_kana()
C. mb_convert_internal()
D. mb_conver_encoding()
