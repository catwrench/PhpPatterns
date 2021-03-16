<?php
/**
 * Created by PhpStorm.
 * User: yw
 * Date: 2021/3/15
 * Time: 9:51 下午
 */

namespace App\PhpPatterns\action\ChainOfResponsibilities;

use Illuminate\Http\Request;

/**
 * 合同责任链抽象类，提供了添加节点方法，以及每个节点需要实现check方法
 */
abstract class ChainOfResponsibilities
{
    //下一个处理器
    private $nextHandle;

    //启动责任链开始处理
    final public function handle(Request $request): bool
    {
        //没有下一个处理器时，返回处理结果
        try {
            $this->check($request);
            if ($this->nextHandle !== null) {
                $this->nextHandle->check($request);
            }
        } catch (\Exception $exception) {
            return false;
        }
        return true;
    }

    //添加下一个处理节点
    final public function nextHandle(ChainOfResponsibilities $handle): ChainOfResponsibilities
    {
        $this->nextHandle = $handle;
        return $handle;
    }

    //校验方法
    abstract public function check(Request $request);
}
