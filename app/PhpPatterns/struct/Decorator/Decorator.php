<?php
/**
 * Created by PhpStorm.
 * User: yw
 * Date: 2021/3/14
 * Time: 3:20 下午
 */

namespace App\PhpPatterns\struct\Decorator;

/**
 * 合同装饰器
 * 定义了需要新增的佣金计算方法
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
