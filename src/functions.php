<?php

if (!function_exists('amis')) {
    /**
     * 获取 Amis Schema 工厂实例
     * 
     * @return \AmisSchema\AmisFactory
     */
    function amis(): \AmisSchema\AmisFactory
    {
        return new \AmisSchema\AmisFactory();
    }
}
