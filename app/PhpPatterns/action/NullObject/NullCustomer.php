<?php
/**
 * Created by PhpStorm.
 * User: yw
 * Date: 2021/3/17
 * Time: 3:23 下午
 */

namespace App\PhpPatterns\action\NullObject;

/**
 * 来自火星的客户
 */
class NullCustomer extends CustomerAbstract
{
    public function sign(): string
    {
        return '';
    }
}
