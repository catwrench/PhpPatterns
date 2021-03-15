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
 * 责任链模式
 * 创建一个对象调用链，如果当前对象无法处理，会继续交给下个节点处理，直到处理完成
 *
 * 场景：
 * 一份租赁合同有租期条款，有优惠条款，有租金递增条款，
 * 相应的也需要按顺序验证对应的请求参数，我们将通过责任链验证所有请求参数
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
