<?php
/**
 * Created by PhpStorm.
 * User: yw
 * Date: 2021/3/17
 * Time: 3:22 下午
 */

namespace App\PhpPatterns\action\NullObject;

/**
 * 线下客户
 */
class OfflineCustomer extends CustomerAbstract
{
    public function sign(): string
    {
        return '线下客户'.$this->getName();
    }
}
