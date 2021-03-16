<?php
/**
 * Created by PhpStorm.
 * User: yw
 * Date: 2021/3/16
 * Time: 4:37 下午
 */

namespace App\PhpPatterns\struct\Flyweight;

use Tests\TestCase;

/**
 * 享元模式
 * 享元模式主要是为了在使用大量类似对象时，共享内存，以节约资源。
 * 通常会通过外部数据结果存储相似对象的状态，需要用到对象时，再传递给享元对象
 *
 * 场景：
 * 一个简单的场景就是给工厂模式加上缓存池，避免频繁的new新的对象，这里就是一个带缓存池的合同生产工厂
 */
class FlyweightTest extends TestCase
{
    public function testContractFlyweight()
    {
        //通过享元对象创建合同
        $flyweight = new Flyweight();
        $flyweight->createContract('rent');
        $flyweight->createContract('sales');
        $flyweight->createContract('rent');
        $count = $flyweight->getCount();
        $this->assertEquals(2, $count);
    }
}
