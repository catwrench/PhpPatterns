<?php
/**
 * Created by PhpStorm.
 * User: yw
 * Date: 2021/3/17
 * Time: 1:36 下午
 */

namespace App\PhpPatterns\action\Mediator;

/**
 * 房屋实体类
 */
class House
{
    //房屋地址
    private $id;

    public function __construct()
    {
        $this->id = str_random(16);
    }

    public function getId(): string
    {
        return $this->id;
    }
}
