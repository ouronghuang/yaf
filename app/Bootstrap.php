<?php

use Orh\Yaf\View\View;
use Yaf\Application;
use Yaf\Bootstrap_Abstract;
use Yaf\Dispatcher;
use Yaf\Loader;
use Yaf\Registry;

class Bootstrap extends Bootstrap_Abstract
{
    public function _initComposer()
    {
        Loader::import(__DIR__.'/../vendor/autoload.php');
    }

    public function _initConfig()
    {
        // 把配置保存起来
        $config = Application::app()->getConfig();
        Registry::set('config', $config);
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
        $dispatcher->setView(View::smarty());
    }
}
