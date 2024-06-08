# 1. 
デバックの説明として正しいものを選択してください 1つ
## 1.1. choices
A. 
本来は必要のないものであり、プログラム初心者のみ行う

B.
PHP独特の作業で、ほかのプログラミング言語では行わない

C.
プログラムは最初から正しく動作することはほとんどないため、
プログラム中の誤りを見つけて修正すること

D.
開発後もプログラムを修正しやすいように、デバックを行うた
めの設定は残しておくべきである

# 2. 
デバックしやすいようにWebブラウザにエラーメッセージを表示した
い場合に設定するとよいパラメーターとして正しいものを選択せよ 1つ
## 2.1. choices
A. show_errors
B. print_errors
C. display_errors
D. log_errors

# 3. 
PHPが扱うエラーの種類を制御するパラメーターとして正しいものを選択
してください 1つ
## 3.1. choices
A. error_report
B. error_reporting
C. PHPerror_report
D. PHPerror_reporting

# 4. 
PHPエディタとパースエラーの説明として正しいものを選択してくださ
い　３つ
## 4.1. choices
A. 一般的なPHP対応のエディタにはシンタックスハイライトの機能がある
B. 一般的なPHP対応のエディタには例外処理を自動で対応する機能がある
C. 一般的なPHP対応のエディタには引用符と括弧の対応付けをする機能がある
D. 一般的なPHP対応のエディタには行番号を表示する機能がある
E. エラーメッセージに示された行数とエラーのある行番号は常に一致する
F. エラーメッセージに示された行数とエラーのある行番号は常に異なる

# 5. 
デバッグする際に配列の内容をすべて表示するために利用する関数とし
て正しいものを選択せよ 1つ  
## 5.1. choices
A. var_dump()
B. error_log()
C. array_search()
D. debug()

# 6.
デバッガと未捕捉例外処理の説明として誤っているものを選択してくだ
さい 1つ
## 6.1. choices
A.
PHPdbgデバッガはPHP付属のデバッガである

B.
break.phpをデバッグするためにphpdbgでデバッグセッション
を開始する場合、次のコードを実行する
▫️ コード
```php
phpdbg -e break.php
```

C.
例外処理をしていない未捕捉例外を通知する手段として例外ハ
ンドラが用意されている

D.
ユーザ定義の例外ハンドラを設定するにはerror_handler()関数
を用いる

# 7. 
PHPUnitの説明として誤っているものを選択してください 1つ
## 7.1. choices
A.
PHPUnitを実行するためPHARファイルを実行可能にするには、
OSのコマンドライン上で次のコマンドを実行する
chmod a+e phpunit.phar

B.
PHPコマンドラインプログラムとしてPHPUnitのバージョンを確
認するには、OSのコマンドライン上で次のコマンドを実行する
php ./phpunit.phar --version

C.
PHPUnitはComposerを利用してインストールすることができる

D.
PHPUnitを利用する手段のひとつに、PHARアーカイブ形式をダ
ウンロードして実行可能形式にする方法がある

# 8. 
Purchase.phpをテストするためにPurchaseTest.phpを作成しました。
PHPUnitプログラムによるテストを行ったときに下の実行結果が得られる
ようにしたい場合、空欄①に当てはまる記述として正しいものを選択して
ください 1つ

【Purchase.php】
```php
print purchase_check($price, $tax);

function purchase_check($price, $tax)
{
  $total = $price * (1 + $tax / 100);
  return $total;
}
```

【PurchaseTest.php】
```php
use PHPUNIT\Framework\TestCase;

include 'Purchase.php';

class PurchaseTest extends TestCase
{
  public function testFailure()
  {
    $price = 100;
    $tax = 8;
    $result = purchase_check($price, $tax);
    $this->①(108, $result);
  }
}
```

【実行結果の一部】
```php
OK　(1 test, 1 assertion)
```
## 8.1. choices
A. compare
B. equals
C. testMethod
D. assert
E. assertEquals

# 9. 
テストに関する説明として正しいものを選択してください 1つ
## 9.1. choices
A.
生産性を高めるためには、テスト対象をなるべく分離しないよ
うにする

B.
テスト実施時に、テストの実行順番に重要な意味があるため、
実行順によってテスト結果が変わるようにした方がよい

C.
テスト駆動開発では、実行すべき新機能があるときに、コード
を書く前にその機能のテストを記述することを目的とする

D.
プロジェクトが大きくなると包括的なテストのメリットは小さ
くなる

# 10. 
PHPエンジンのコードも管理している代表的なバージョン管理システム
として正しいものを選択してください 1つ
## 10.1. choices
A. Git
B. Zendversion
C. overflow
D. Composer

# 11. 
PHPの開発環境の説明として誤っているものを選択してください 1つ
## 11.1. choices
A.
開発環境と本番環境は分離するべきである

B.
一般的に本番環境はクラウド環境やデータセンターのサーバ上
で構築し、開発環境は自分のコンピュータ上で構築する傾向が
ある

C.
php_ini_file()関数を用いることで、設定ファイルの内容を一度
に読み込むことができる

D.
環境固有の構成情報とコードは分離すべきである

# 12. 
PHPのスケーリングやパフォーマンスの説明として誤っているものを選
択してください。1つ
## 12.1. choices
A.
PHPは大規模なWebサイトでの利用に対応している

B.
PHPは小規模なWebサイトの作成に適している

C.
PHPの動作を高速化するための一つの手段としてプロファイラの
活用が挙げられる

D.
Webシステムの動作が重い場合、PHPの動作速度のみが原因であ
ると考えられる

# 13. 
セキュリティ対策として正しいものを選択してください。 1つ
## 13.1. choices
A.
入力のフィルタリングのみ行う

B.
出力のエスケープのみ行う

C.
SQLインジェクション攻撃の対策としてPDOのプリペアドステート
メントとプレースホルダを利用する

D.
Webアプリケーションのセキュリティは、ファイアウォールでのみ
設定する

# 14. 
クロスサイトスクリプティングの対策に有効な関数を選択してく
ださい 2つ
## 14.1. choices
A. password_hash()
B. htmlentities()
C. strip_tags()
D. file_exists()