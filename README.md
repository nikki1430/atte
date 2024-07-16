# atte
***
## アプリケーション概要
ログインしたユーザーが出勤時間・退勤時間・休憩開始時間・休憩終了時間の登録ができる。
また、管理画面から、日付別、ユーザー別の出退勤の記録の参照ができる

## アプリケーションURL
ec2-35-78-71-94.ap-northeast-1.compute.amazonaws.com

## 機能一覧
* ログイン機能
* メール認証機能
* 出退勤・休憩入・戻時間の打刻
* 日付別の勤怠状況の参照
* ユーザー別の勤怠状況の参照
* ユーザー一覧の参照

## 使用技術
* Laravel8
* php8.2
* mysql:8.0.32
* Fortify(ユーザー認証・メール認証）

## テーブル設計
<img width="475" alt="テーブル仕様書" src="https://github.com/nikki1430/atte/assets/164667475/ba7023ff-6919-4475-b3ea-37faea674b9c">

##環境構築
###セットアアップ
atte
├── docker
│   ├── mysql
│   │   ├── data
│   │   └── my.cnf
│   ├── nginx
│   │   └── default.conf
│   └── php
│       ├── Dockerfile
│       └── php.ini
├── docker-compose.yml
└── src

* 上記ディレクトリを作成
* 各ファイルの記述を終えたら
  docker-compose up -d --build　でビルド
***
##laravelインストール
* docker-compose exec php bash　(phpコンテナ内にログイン)
* composer -v (composerインストール)
* composer create-project "laravel/laravel=8.*" . --prefer-dist (laravelプロジェクト作成)
***


##ER図
![atte01](https://github.com/user-attachments/assets/d0e213f0-0077-4549-93ac-7239e60133fd)



