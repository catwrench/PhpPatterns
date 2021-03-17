<?php
/**
 * Created by PhpStorm.
 * User: yw
 * Date: 2021/3/17
 * Time: 1:44 下午
 */

namespace App\PhpPatterns\action\Mediator;

/**
 * 房东类，继承了客户抽象类
 */
class Landlord extends CustomerAbstract
{
    //出租
    function doSomething(CustomerAbstract $customer)
    {
        return '房东：'.$this->getName().'，出租了房屋给租客：'.$customer->getName();
    }
}
