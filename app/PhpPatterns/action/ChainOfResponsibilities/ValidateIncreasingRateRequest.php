<?php
/**
 * Created by PhpStorm.
 * User: yw
 * Date: 2021/3/15
 * Time: 10:22 下午
 */

namespace App\PhpPatterns\action\ChainOfResponsibilities;

use Illuminate\Http\Request;

/**
 * 合同计算递增率条款验证器
 */
class ValidateIncreasingRateRequest extends ChainOfResponsibilities
{
    public function check(Request $request)
    {
    }
}
