<?php
/**
 * Created by PhpStorm.
 * User: yw
 * Date: 2021/3/16
 * Time: 11:35 下午
 */

namespace App\PhpPatterns\action\Command;

use Tests\TestCase;

/**
 * 命令行模式
 * 将命令从实体中抽离，通过单独的命令管理类执行，以实现实体和依赖的命令之间的解耦
 *
 * 场景：
 * 合同有优惠、递增、保证金条款，这些条款都实现统一的计算接口，本来合同是可以直接调取这些条款进行计算的，
 * 但是现在加入一个命令管理中间层，以达成合同和条款的解耦，也就可以实现条款的重复执行等等操作
 */
class CommandTest extends TestCase
{
    //测试合同条款命令
    public function testContractClauseCommand()
    {
        //初始化合同
        $contract = new RentContract();
        $contract->setAmount(10000);

        //初始化合同命令
        $discountCommand = new DiscountCommand($contract);
        $increaseCommand = new IncreaseCommand($contract);
        $depositCommand = new DepositCommand($contract);

        //初始化命令管理工具
        $commandManage = new ClauseCommandManage();
        $commandManage->add($discountCommand);
        $commandManage->add($increaseCommand);
        $commandManage->add($depositCommand);
        $commandManage->exec();
        $this->assertEquals((10000 - 100) * 1.1 + 1000, $contract->getAmount());
    }
}
