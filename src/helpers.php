<?php

if (!function_exists('amis')) {
    /**
     * 获取 Amis Schema 工厂实例
     * 
     * @return \Jiangwang\AmisSchema\AmisFactory
     */
    function amis(): \Jiangwang\AmisSchema\AmisFactory
    {
        return new \Jiangwang\AmisSchema\AmisFactory();
    }
}
