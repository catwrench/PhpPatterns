<?php
/**
 * Created by PhpStorm.
 * User: yw
 * Date: 2021/3/17
 * Time: 3:27 下午
 */

namespace App\PhpPatterns\action\Iterator;

class RentContract implements ContractInterface
{
    private $sn;

    public function __construct()
    {
        $this->sn = str_random(16);
    }

    public function getSn(): string
    {
        return $this->sn;
    }

    public function create()
    {
    }
}
