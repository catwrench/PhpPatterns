<?php
/**
 * Created by PhpStorm.
 * User: yw
 * Date: 2021/3/14
 * Time: 5:25 下午
 */

namespace App\PhpPatterns\struct\Adapter;

class OfflineContract implements OfflineContractInterface
{
    private $manualSignature;

    public function create()
    {
        // TODO: Implement create() method.
    }

    public function manualSignature()
    {
        if (!empty($this->manualSignature)) {
            $this->manualSignature = time();
        }
    }

    public function getManualSignature()
    {
        return $this->manualSignature;
    }
}
