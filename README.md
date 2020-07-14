# ES Editor

## 開発の方針

* Dockerを用いてローカルで実装を行い、ミニマムな開発単位でコミット・PRを行う
* 大規模なフレームワークやドメイン駆動は利用せず、シンプルかつスピーディな実装が行えるようなフレームワークやライブラリを選定する

## 開発環境

* PHP 7.0.x
* MySQL 5.7.*

## 利用するフレームワーク、ライブラリ、ツール

|名前|用途|
|:---|:---|
|Slim Framework 3.*|主にルーティング用途|
|php-activerecord 1.2.0|O/Rマッパー|
|Smarty 3.*|テンプレートエンジン|
|goose|マイグレーションツール|

## チュートリアル

* Macのみサポート
* Dockerインストール済の前提

### ローカルの開発環境を起動する

ターミナルから `deployments/local` に移動して、`docker-compose up --build` でDockerによるローカルの開発環境が構築される。

### データベースのテーブルを更新する

データベースにテーブルを追加する場合は、`goose` を利用する。
ターミナルから `database/migrations/mysql/misc` に移動して、
`../goose_mac create {マイグレーション内容(半角英数)} sql` を入力。
`database/migrations/mysql/misc/db/migrations` にマイグレーションファイルが生成されるので、
テーブルの作成・更新クエリと、それを元に戻すクエリを記述する。
記述が終わったら、`database/migrations/mysql/misc` で `../goose_mac -env local up` を実行する。

### コードを実装する

1. `application/controllers` 内にコントローラファイルを追加・記述する
2. `configs/routes.php` に1のコントローラを呼び出すためのパス情報を記載する
3. データベースの情報を操作したい場合は、`application/packages/activerecord` にORマッパーを実装する
4. `application/views/templates` にSmartyのファイルを追加して、画面を作成する<br>
画面に表示する情報は、コンポーネント単位で `packages/viewdata/*` を作成する


## コーディング規約

* ファイルは全てUTF-8

### PHP

* PSR0、1、2に準拠
* インデントは4スペース
* タイプヒンティングは最大限利用する
* PHPDocを必ず記載する（PHPStormの補完を最大限活用できるようにする）

### HTML, CSS等

* インデントは2スペース

### 命名規約

|種類|表記|例|
|:---|:---|:---|
|オートロード対象のPHPのファイル、ディレクトリ|ロウアーケース|controller/hogesample.php|
|上記以外のファイル、ディレクトリ|スネークケース|public/css/hoge_sample.css|
|クラス|パスカルケース|SampleClass|
|プロパティ|キャメルケース|$sampleProperty|
|メソッド|キャメルケース|sampleMethod()|
|Smarty変数|スネークケース|sample_view_value|

### その他

* controllers、packages内ではネームスペースは使用しない（usingあり/なしで可読性が低下することを防ぐため）
* 画面に描画されるコンポーネント単位（もっとも大きいものはページ単位）でViewDataクラスを適切に定義する
