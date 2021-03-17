<?php
/**
 * Created by PhpStorm.
 * User: yw
 * Date: 2021/3/17
 * Time: 1:27 下午
 */

namespace App\PhpPatterns\action\Mediator;

/**
 * 客户抽象类
 */
abstract class CustomerAbstract
{
    //客户id
    private $id;
    //客户名称
    private $name;
    //房屋中介
    protected $mediator;

    public function __construct(string $name)
    {
        $this->name = $name;
        $this->id = str_random(32);
    }

    public function getId()
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    //注入房屋中间
    public function setMediator(MediatorInterface $mediator)
    {
        $this->mediator = $mediator;
        return $this;
    }

    //之类需要实现的功能
    abstract function doSomething(CustomerAbstract $customer);
}
