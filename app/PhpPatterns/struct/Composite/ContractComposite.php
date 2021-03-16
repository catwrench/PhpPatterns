<?php
/**
 * Created by PhpStorm.
 * User: yw
 * Date: 2021/3/15
 * Time: 11:27 下午
 */

namespace App\PhpPatterns\struct\Composite;

/**
 * 组合模式
 * 把一组相似的对象看做单一的一个对象，客户端对单个对象和组合对象的使用是一样的
 *
 * 场景：
 * 一份合同可以有优惠条款，可以有租金递增条款，可以有保证金条款，
 * 他们都会影响到合同总金额，可以组合使用也可以单独使用某一条款
 */
abstract class ContractComposite extends ClauseAbstract
{
    //条款列表
    protected $clauses = array ();
    //合同金额
    private $amount;

    public function getAmount()
    {
        return $this->amount;
    }

    public function setAmount($amount)
    {
        $this->amount = $amount;
    }

    public function addClause(ClauseAbstract $clause)
    {
        $this->clauses[] = $clause;
    }
}
