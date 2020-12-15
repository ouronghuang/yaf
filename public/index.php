<?php

define('YAF_START', microtime(true));
define('APP_PATH', dirname(__FILE__, 2));

$app = new \Yaf\Application(APP_PATH.'/conf/app.ini');
$app->bootstrap()->run();
