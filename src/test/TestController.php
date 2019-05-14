<?php
/**
 * Created by PhpStorm.
 * User: k
 * Date: 2019/5/14
 * Time: 16:29
 */

namespace km\test\test;

use Swoft\Aop\ProceedingJoinPoint;
use Swoft\Bean\Annotation\Around;
use Swoft\Bean\Annotation\Aspect;
use Swoft\Bean\Annotation\PointAnnotation;

/**
 * Class TestController
 * @package km\test\test
 * @Aspect()
 * @PointAnnotation(
 *     include={
            TestBase::class
 *     }
 * )
 */
class TestController
{

    /**
     * @Around()
     */
    public function around(ProceedingJoinPoint $proceedingJoinPoint){
        var_dump($proceedingJoinPoint);
    }
}