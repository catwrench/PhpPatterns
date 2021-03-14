<?php
/**
 * Created by PhpStorm.
 * User: yw
 * Date: 2021/3/14
 * Time: 4:43 下午
 */

namespace App\PhpPatterns\action\Observer;

use Tests\TestCase;

class ObserverTest extends TestCase
{
    //测试创建合同通知用户
    public function testCreateContractNotifyUser()
    {
        $user = new UserObserver();
        //创建第一份合同
        $contract = new ContractSubject();
        $contract->attach($user);
        $contract->create();
        $this->assertTrue($user->getContractCount() == 1);
        //创建第二份合同
        $contract2 = new ContractSubject();
        $contract2->attach($user);
        $contract2->create();
        $this->assertTrue($user->getContractCount() == 2);
    }
}
