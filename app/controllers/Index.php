<?php

/**
 * @name IndexController
 *
 * @author root
 * @desc 默认控制器
 *
 * @see http://www.php.net/manual/en/class.yaf-controller-abstract.php
 */
class IndexController extends \Yaf\Controller_Abstract
{
    /**
     * 默认动作
     * Yaf支持直接把\Yaf\Request_Abstract::getParam()得到的同名参数作为Action的形参
     * 对于如下的例子, 当访问http://yourhost/yaf_skeleton/index/index/index/name/root 的时候, 你就会发现不同.
     */
    public function indexAction($name = 'Stranger')
    {
        // $this->yaf();

        $this->getView()->assign('name', 'Ned');
    }

    protected function yaf()
    {
        // if `yaf.use_namespace = On`
        echo '<h3>Yaf version:</h3>';
        echo Yaf\VERSION;

        echo '<h3>Declared classes:</h3>';

        $classes = get_declared_classes();

        foreach ($classes as $class) {
            if (preg_match('/^Yaf.*/', $class)) {
                echo "{$class}<br>";
            }
        }

        echo '<h3>Declared interfaces:</h3>';

        $interfaces = get_declared_interfaces();

        foreach ($interfaces as $interface) {
            if (preg_match('/^Yaf.*/', $interface)) {
                echo "{$interface}<br>";
            }
        }

        echo '<h3>Defined constants:</h3>';

        $constants = get_defined_constants();

        foreach ($constants as $k => $v) {
            if (preg_match('/^YAF.*/', $k)) {
                echo "{$k}: {$v}<br>";
            }
        }
    }
}
