<?php

/**
 * @name Bootstrap
 * @author root
 * @desc 所有在 Bootstrap 类中，以 _init 开头的方法，都会被 Yaf 调用
 * @see http://www.php.net/manual/en/class.yaf-bootstrap-abstract.php
 * 这些方法，都接受一个参数：\Yaf\Dispatcher $dispatcher
 * 调用的次序，和申明的次序相同
 */

use \Yaf\{
    Application,
    Bootstrap_Abstract,
    Dispatcher,
    Loader,
    Registry
};

class Bootstrap extends Bootstrap_Abstract
{
    public function _initComposer()
    {
        Loader::import(__DIR__.'/../vendor/autoload.php');
    }

    public function _initConfig()
    {
        // 把配置保存起来
        $arrConfig = Application::app()->getConfig();
        Registry::set('config', $arrConfig);
    }

    public function _initPlugin(Dispatcher $dispatcher)
    {
        // 注册一个插件
        // $objSamplePlugin = new SamplePlugin();
        // $dispatcher->registerPlugin($objSamplePlugin);
    }

    public function _initRoute(Dispatcher $dispatcher)
    {
        // 在这里注册自己的路由协议,默认使用简单路由
    }

    public function _initView(Dispatcher $dispatcher)
    {
        // 在这里注册自己的 view 控制器，例如 smarty, firekylin
    }
}
