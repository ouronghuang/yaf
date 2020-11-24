<?php

define('APPLICATION_PATH', dirname(__FILE__));

$application = new \Yaf\Application(APPLICATION_PATH.'/conf/app.ini');

$application->bootstrap()->run();
