可以按照以下步骤来部署和运行程序:

1. 请确保机器 root@localhost 已经安装了 Yaf 框架, 并且已经加载入 PHP;
2. 把 yaf_skeleton 目录 Copy 到 Webserver 的 DocumentRoot 目录下;
3. 需要在 php.ini 里面启用如下配置，生产的代码才能正确运行：
	
```
 yaf.environ="product"
 ```
	
4. 重启 Webserver;
5. 访问 http://yourhost/yaf_skeleton/, 出现 Hellow Word!, 表示运行成功, 否则请查看 php 错误日志;
