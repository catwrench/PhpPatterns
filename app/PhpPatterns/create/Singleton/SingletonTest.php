<?php
/**
 * Created by PhpStorm.
 * User: yw
 * Date: 2021/3/14
 * Time: 3:14 下午
 */

namespace App\PhpPatterns\create\Singleton;

use Tests\TestCase;

/**
 * 单例模式
 * 单例模式被公认为是 反面模式，通常使用依赖注入模式替代单例模式，保以证可测试性和可维护性
 */
class SingletonTest extends TestCase
{
    //测试通过单例创建的两个实例是否相等
    public function testInstance()
    {
        $instance_1 = Singleton::getInstance();
        $instance_2 = Singleton::getInstance();
        $this->assertInstanceOf(Singleton::class, $instance_1);
        $this->assertInstanceOf(Singleton::class, $instance_2);
        $this->assertSame($instance_1, $instance_2);
    }
}
