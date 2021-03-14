<?php
/**
 * Created by PhpStorm.
 * User: yw
 * Date: 2021/3/14
 * Time: 4:22 下午
 */

namespace App\PhpPatterns\action\Observer;

use SplSubject;

class UserObserver implements \SplObserver
{
    //用户签订的合同数
    private $contractCount;

    public function __construct()
    {
        $this->contractCount = 0;
    }

    //用户观察者观察到的合同创建完成
    public function update(SplSubject $subject)
    {
        if ($subject instanceof ContractSubject) {
            $this->contractCount++;
        }
    }

    //获取用户签订的合同数
    public function getContractCount(): int
    {
        return $this->contractCount;
    }
}
