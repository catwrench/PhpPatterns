<?php
/**
 * Created by PhpStorm.
 * User: yw
 * Date: 2021/3/15
 * Time: 11:27 下午
 */

namespace App\PhpPatterns\struct\Composite;

/**
 * 合同组合抽象类
 * 作为各类条款的上层，提供了用于组合条款的列表，同样也继承了条款抽象类
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
