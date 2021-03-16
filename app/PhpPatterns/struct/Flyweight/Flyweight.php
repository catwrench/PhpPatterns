<?php
/**
 * Created by PhpStorm.
 * User: yw
 * Date: 2021/3/16
 * Time: 4:54 下午
 */

namespace App\PhpPatterns\struct\Flyweight;

use App\Exceptions\BusinessException;

/**
 * 合同享元类
 * 带缓存池的合同工厂
 */
class Flyweight
{
    //缓存池，存放已创建的合同
    private $pool;

    //工厂模式创建合同
    public function createContract($type = ''): ContractInterface
    {
        //缓存池存在数据直接返回
        if (isset($this->pool[$type])) {
            return $this->pool[$type];
        }
        //缓存池不存在数据，进行new,并更新缓存
        switch ($type) {
            case 'rent':
                return $this->pool[$type] = new RentContract();
            case 'sales':
                return $this->pool[$type] = new SalesContract();
            default:
                throw new BusinessException(1000);
        }
    }

    //获取缓存池的享元对象数量
    public function getCount(): int
    {
        return sizeof($this->pool);
    }
}
