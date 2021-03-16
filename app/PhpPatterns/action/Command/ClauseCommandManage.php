<?php
/**
 * Created by PhpStorm.
 * User: yw
 * Date: 2021/3/16
 * Time: 11:54 下午
 */

namespace App\PhpPatterns\action\Command;

/**
 * 条款命令管理器
 */
class ClauseCommandManage
{
    //命令队列
    private $list;

    //添加命令
    public function add(ClauseCommandInterface $command)
    {
        $this->list[] = $command;
    }

    //执行所有命令
    public function exec()
    {
        foreach ($this->list as $item) {
            $item->exec();
        }
    }
}
