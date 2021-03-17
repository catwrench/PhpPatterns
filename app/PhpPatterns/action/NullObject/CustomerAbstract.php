<?php
/**
 * Created by PhpStorm.
 * User: yw
 * Date: 2021/3/17
 * Time: 3:17 下午
 */

namespace App\PhpPatterns\action\NullObject;

/**
 * 客户抽象类
 */
abstract class CustomerAbstract
{
    //用户名
    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }

    //签订合同操作
    abstract public function sign(): string;
}
