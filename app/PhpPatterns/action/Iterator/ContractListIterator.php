<?php
/**
 * Created by PhpStorm.
 * User: yw
 * Date: 2021/3/17
 * Time: 3:59 下午
 */

namespace App\PhpPatterns\action\Iterator;

/**
 * 合同列表迭代器
 */
class ContractListIterator implements Iterator
{
    //当前索引
    private $index;
    //列表
    private $list;
    //列表长度
    private $length;

    public function __construct()
    {
        $this->index = 0;
        $this->length = 0;
        $this->list = [];
    }

    //添加合同
    public function add(ContractInterface $contract)
    {
        $this->list[] = $contract;
        $this->length += 1;
    }

    //添加合同列表
    public function addList(array $contracts)
    {
        $this->list = array_merge($this->list, $contracts);
        $this->length += sizeof($contracts);
    }

    //获取当前下一个节点，index+1
    public function next()
    {
        if ($this->hasNext()) {
            $this->index += 1;
            return $this->list[$this->index];
        } else {
            return null;
        }
    }

    public function index()
    {
        return $this->index;
    }

    //获取当前节点，index+1
    public function current()
    {
        if (empty($this->list)) {
            return null;
        } else {
            $this->index += 1;
            return $this->list[$this->index - 1];
        }
    }

    public function hasNext(): bool
    {
        return $this->index < $this->length;
    }
}
