## 项目概述

- 产品名称：Yaf
- 项目代号：yaf

## 运行环境

- PHP 7.0+
- Yaf 3.0+

## 前置安装

1. 安装 Yaf 扩展

* [源码编译](https://github.com/laruence/yaf)
* [Pecl 安装](https://ouronghuang.com/articles/46)

2. 启用 Yaf 命名空间功能

```
// /usr/local/php/etc/php.ini

[yaf]
yaf.use_namespace = On
yaf.use_spl_autoload = On
```

## 基础安装

1. 克隆源代码

```
$ git clone git@gitee.com:orh/yaf.git
```

2. 生成配置

```
$ cp conf/app.ini.example conf/app.ini
```

3. 安装扩展包

```
$ composer install
```

4. 配置 Nginx 优雅链接

```
// /usr/local/nginx/conf/rewrite/yaf.conf

location / {
    try_files $uri $uri/ /index.php?$query_string;
}
```

## 扩展相关

| 扩展包 | 描述 | 应用 |
| --- | --- | --- |
| [guzzlehttp/guzzle](https://packagist.org/packages/guzzlehttp/guzzle) | HTTP 请求套件 | - |
