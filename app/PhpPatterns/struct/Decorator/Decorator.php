<?php
/**
 * Created by PhpStorm.
 * User: yw
 * Date: 2021/3/14
 * Time: 3:20 下午
 */

namespace App\PhpPatterns\struct\Decorator;

/**
 * 装饰器模式
 * 装饰器模式可以动态的为实例增加方法
 *
 * 场景：
 * 我们有了租赁合同，这个时候我们有了新的需求需要将合同金额的10%作为佣金，通过装饰器模式为合同添加佣金属性
 */
abstract class Decorator implements ContractInterface
{
    //包装对象，这里是合同接口
    private $wrapper;

    //传入合同接口对象
    public function __construct(ContractInterface $contract)
    {
        $this->wrapper = $contract;
    }

    public function create()
    {
        $this->wrapper->create();
    }

    //装饰操作，计算佣金
    abstract public function commission();
}
