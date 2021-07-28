# PHP 開発環境

## 概要

PHP の Docker Official image に対して、開発必要なツール群をインストールしたイメージ。

### ベースイメージ

php:7.4-apache

## 利用方法

実行ホストのアーキテクチャの種類を`.env`に記載する。  
(`ARCH`という変数名だと`starship`のインストールでエラーが出るので`ARCH_TYPE`という変数名を利用)

### Mac (Silicon)

```env
ARCH_TYPE=arm64
```

### Mac (Intel)

```env
ARCH_TYPE=amd64
```
