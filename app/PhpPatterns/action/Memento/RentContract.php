<?php
/**
 * Created by PhpStorm.
 * User: yw
 * Date: 2021/3/14
 * Time: 11:32 上午
 */

namespace App\PhpPatterns\action\Memento;

/**
 * 租赁合同类
 */
class RentContract implements ContractInterface
{
    //合同内容
    private $content;
    //合同草稿
    private $draft;

    public function __construct()
    {
        $this->draft = new DraftContract();
    }

    public function create()
    {
    }

    //获取当前合同内容
    public function getContent()
    {
        return $this->content;
    }

    //获取合同草稿
    public function getDraft(): string
    {
        return $this->draft->get();
    }

    //更新合同内容
    public function updateDraft(string $content)
    {
        $this->draft->add($content);
    }

    //撤销草稿
    public function rollbackDraft()
    {
        $this->draft->cancel();
    }

    //审核草稿
    public function reviewDraft()
    {
        $this->content = $this->draft->get();
        $this->draft->reset();
    }
}
