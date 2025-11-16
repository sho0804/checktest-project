# 確認テスト_お問合せフォーム

## 環境構築手順

### 1.リポジトリのクローン
```bash
git clone git@github.com:sho0804/checktest-project.git
cd checktest-project
```
### Dockerコンテナの起動
```bash
docker-compose up -d --build
```

### Laravelのセットアップ
```bash
docker-compose exec php bash
```

### パッケージインストール
```bash
composer install
```

### .env作成と編集
```bash
cp .env.example .env
exit
```

### VSCode内で.envの編集
```bash
code .
```
.envの以下を編集：
DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=checktest_db
DB_USERNAME=checktest_user
DB_PASSWORD=checktest_pass

### キャッシュクリアとアプリキー生成
```bash
docker-compose exec php bash
php artisan config:clear
php artisan config:cache
php artisan key:generate
```

### マイグレーション & シーダー実行
```bash
php artisan migrate
php artisan db:seed
```

## アクセスURL
お問合せ画面：http://localhost
ユーザー登録：http://localhost/register
phpmyadmin：http://localhost:8080

## 実行環境
|  サービス  | バージョン |   　 役割     |
|-----------|-----------|---------------|
|php-fpm    |8.1        |Laravel環境    |
|mysql      |8.0.26     |データベース　　|
|nginx      |1.21.1     |Webサーバ      |