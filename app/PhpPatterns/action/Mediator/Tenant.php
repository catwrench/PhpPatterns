<?php
/**
 * Created by PhpStorm.
 * User: yw
 * Date: 2021/3/17
 * Time: 1:30 下午
 */

namespace App\PhpPatterns\action\Mediator;

/**
 * 租客类，继承了客户抽象类
 */
class Tenant extends CustomerAbstract
{
    //租房操作
    function doSomething(CustomerAbstract $customer)
    {
        //通过中介租房
        $this->mediator->rent($this);

        return '租客 '.$this->getName().' 租到了房东 '.$customer->getName().' 的房子';
    }
}
