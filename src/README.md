# 確認テスト_お問合せフォーム

## 環境構築手順
- Docker環境構築
```bash
docker-compose up -d
```

- Laravel環境構築
```bash
docker exec -it php bash
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
php artisan db:seed
```

Web ブラウザで http://localhost:8080 にアクセス

## 開発環境
お問合せ画面：http://localhost
ユーザー登録：http://localhost/register
phpmyadmin：http://localhost:8080

## 実行環境
|  サービス  | バージョン |   　 役割     |
|-----------|-----------|---------------|
|php-fpm    |8.1        |Laravel環境    |
|mysql      |8.0.26     |データベース　　|
|nginx      |1.21.1     |Webサーバ      |