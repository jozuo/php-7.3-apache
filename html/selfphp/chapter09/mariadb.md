# MariaDB

## ユーザーの作成

```sh
# ローカルアクセス用
$ GRANT ALL PRIVILEGES ON selfphp.* TO selfphp@localhost IDENTIFIED BY 'selfphp';

# リモートアクセス用
$ GRANT ALL PRIVILEGES ON selfphp.* TO selfphp@'%' IDENTIFIED BY 'selfphp';
```

## DB の作成

```sh
$ CREATE DATABASE selfphp CHARACTER SET 'UTF8mb4';
```

## テーブルの作成

```sh
CREATE TABLE member (
  id INT PRIMARY KEY AUTO_INCREMENT,
  name VARCHAR(255) NOT NULL,
  gender VARCHAR(10) DEFAULT 'male',
  age INT NOT NULL,
  enter DATE NOT NULL,
  memo VARCHAR(255));
```

## レコードの投入

```sh
$ insert into member(name, gender, age, enter, memo) values ('山田太郎', 'male', 20, '2021-07-24', null);
```
