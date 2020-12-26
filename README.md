# README

## このプロジェクトについて

Vue.js と Vue-Router、APIの練習用アプリ

## 構築手順

### コンテナの起動

```
make build
```

```
make up
```

### Laravelのインストール

```
make create-project
```

serverディレクトリ配下のlaravelディレクトリにアプリのファイルが作成されるので、
その中身を非表示ファイルごと一階層上のディレクトリに移動させる

### MySQLとの接続を設定

- .envファイルを下記のように設定

```
DB_CONNECTION=mysql
DB_HOST=db（←コンテナ名）
DB_PORT=3306（←コンテナ側のポート番号）
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=password
```

- .envの5行目も下記のように設定

```
APP_URL=http://localhost:8000
```

### artisanコマンドの実行場所

```
make work
```


## 導入したライブラリ

```
composer require jenssegers/agent
```

## デプロイ先

- コマンド
```
git subtree push --prefix server/ heroku master
```

- 参考記事
> https://qiita.com/rope19181/items/07d556715a3a4f6191bd