## Overview
nrsさんが投稿された「実装クリーンアーキテクチャ」をピュアなPHPで実装してみた
https://qiita.com/nrslib/items/a5f902c4defc83bd46b8

プログラムの仕様は下記の通りです。

1. usernameを入力する
2. 同名のuserが登録済みでない場合は登録が完了する、userIdも採番される
3. 同名のuserが登録済みの場合は登録が出来ず、登録済みのuserのuserIdが表示される
4. 1に戻る

## Installation

```
git clone https://github.com/SuzukiCecil/php-cleanArchitecture-nrs.git
cd php-cleanArchitecture-nrs/
composer install
```

## Usage

```
php main.php
```

## sample
```
=======================================
Welcome to sample of clean architecture
=======================================

Enter the name of the new user.
username:
>hoge
id:1 name:hoge created:2019/03/27 08:58:25
Enter the name of the new user.
username:
>foo
id:2 name:foo created:2019/03/27 08:58:28
Enter the name of the new user.
username:
>hoge
id:1 name:hoge is already exist
Enter the name of the new user.
```
