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
