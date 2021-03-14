<?php
/**
 * Created by PhpStorm.
 * User: yw
 * Date: 2021/3/14
 * Time: 11:49 下午
 */

namespace App\PhpPatterns\struct\Decorator;

class CommissionDecorator extends Decorator
{
    //佣金金额
    private $commission;
    //合同金额
    private $amount;

    //设置合同金额
    public function setAmount($amount)
    {
        $this->amount = $amount;
    }

    //获取佣金
    public function getCommission()
    {
        return $this->commission;
    }

    //计算佣金
    public function commission()
    {
        $this->commission = 0.1 * $this->amount;
    }

    //重写父类的创建方法，添加佣金计算操作
    public function create()
    {
        parent::create();
        $this->commission();
    }
}
