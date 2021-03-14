<?php
/**
 * Created by PhpStorm.
 * User: yw
 * Date: 2021/3/14
 * Time: 5:26 下午
 */

namespace App\PhpPatterns\struct\Adapter;

class OnlineContract implements OnlineContractInterface
{
    private $electronicSignature;

    public function __construct()
    {
        $this->electronicSignature = '';
    }

    public function create()
    {
        // TODO: Implement create() method.
    }

    public function electronicSignature()
    {
        if ($this->electronicSignature == '') {
            $this->electronicSignature = time();
        }
    }

    public function getElectronicSignature(): string
    {
        return $this->electronicSignature;
    }
}
