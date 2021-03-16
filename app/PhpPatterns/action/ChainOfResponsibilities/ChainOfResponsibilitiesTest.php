<?php
/**
 * Created by PhpStorm.
 * User: yw
 * Date: 2021/3/15
 * Time: 10:33 下午
 */

namespace App\PhpPatterns\action\ChainOfResponsibilities;

use Illuminate\Http\Request;
use Tests\TestCase;

/**
 * 责任链模式
 * 创建一个对象调用链，如果当前对象无法处理，会继续交给下个节点处理，直到处理完成
 *
 * 场景：
 * 一份租赁合同有租期条款，有优惠条款，有租金递增条款，
 * 相应的也需要按顺序验证对应的请求参数，我们将通过责任链验证所有请求参数
 */
class ChainOfResponsibilitiesTest extends TestCase
{
    //测试责任链
    public function testChain()
    {
        $request = new Request();

        //初始化合同租期条款验证器
        $validateLeaseTermRequest = new ValidateLeaseTermRequest();
        //初始化合同优惠条款验证器
        $validateDiscountRequest = new ValidateDiscountRequest();
        //初始化合同计算递增率条款验证器
        $validateIncreasingRateRequest = new ValidateIncreasingRateRequest();

        //设置责任链处理顺序并开始处理
        $res = $validateLeaseTermRequest->nextHandle($validateDiscountRequest)
            ->nextHandle($validateIncreasingRateRequest)
            ->handle($request);

        $this->assertTrue($res);
    }
}
