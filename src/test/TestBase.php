<?php
/**
 * Created by PhpStorm.
 * User: k
 * Date: 2019/5/14
 * Time: 16:25
 */
namespace km\test\test;
/**
 * Class TestBase
 * @package km\test\test
 * @Target("METHOD")
 */
class TestBase
{

    public function __construct($name)
    {
        var_dump('test');
    }

}