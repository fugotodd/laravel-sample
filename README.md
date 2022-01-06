# 購物車範例

## 需求

* php >= 7.3
* nodejs >= 12

## 初始化專案

composer 安裝

```shell
composer install
```

npm 安裝 

```shell
npm install
```

初始化 database

```shell
php artisan migrate
php artisan db:seed --class=ProductSeeder
```

執行 mix 產出 css 與 js

```shell
mix
```

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
