<?php
/**
 * Created by PhpStorm.
 * User: yw
 * Date: 2021/3/15
 * Time: 10:22 下午
 */

namespace App\PhpPatterns\struct\ChainOfResponsibilities;

use Illuminate\Http\Request;

/**
 * 合同优惠条款验证器
 */
class ValidateDiscountRequest extends ChainOfResponsibilities
{
    public function check(Request $request)
    {
    }
}
