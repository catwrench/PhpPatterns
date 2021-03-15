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
 * 合同租期条款验证器
 */
class ValidateLeaseTermRequest extends ChainOfResponsibilities
{
    public function check(Request $request)
    {
    }
}
