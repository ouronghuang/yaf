<?php

define('APP_PATH', dirname(__FILE__, 2));

$application = new \Yaf\Application(APP_PATH.'/conf/app.ini');

$application->bootstrap()->run();
